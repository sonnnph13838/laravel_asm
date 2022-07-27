<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
}
