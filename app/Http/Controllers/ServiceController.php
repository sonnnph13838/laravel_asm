<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Service();
        $this->v['list_service'] = $opj->loadList();
        return view("admin/service.index", $this->v);
    }
    public function add(ServiceRequest $request)
    {

        $method_route = 'service_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new Service();
            $res = $modelTest->saveNew($param);
            if ($res = null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Them moi thanh cong');
            } else {
                Session::flash('error', 'Loi them moi nguoi dung');
                return redirect()->route($method_route);
            }
        }
        return view("admin/service.add", $this->v);
    }
    public function detail($id)
    {
        $objService = new Service();
        $objItem = $objService->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin/Service.edit", $this->v);
    }
    public function update($id, Request $request)
    {

        $method_route = 'service_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        $objService = new Service();
        $objItem = $objService->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objService->SaveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route, ['id' => $id]);
        } else if ($res == 1) {
            Session::flash('success', 'Cập nhật bản ghi ' . $objItem->id . ' thành công');
            return redirect()->route($method_route, ['id' => $id]);
        } else {
            Session::flash('error', 'lỗi cập nhật bản ghi' . $objItem->id);
            return redirect()->route($method_route, ['id' => $id]);
        }
    }
}
