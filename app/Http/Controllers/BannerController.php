<?php

namespace App\Http\Controllers;

use App\Models\Banner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Banner();
        $this->v['list_banner'] = $opj->loadList();
        return view("client.home", $this->v,);
    }
    public function index1()
    {
        $opj = new Banner();
        $this->v['list_banner'] = $opj->loadList();
        return view("admin/banner.index", $this->v,);
    }
    public function update($id, Request $request)
    {

        $method_route = 'banner_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        $objBanner = new Banner();
        $objItem = $objBanner->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objBanner->SaveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route, ['id' => $id]);
        } else if ($res == 1) {
            Session::flash('success', 'Cập nhật bản ghi' . $objItem->id . 'thành công');
            return redirect()->route($method_route, ['id' => $id]);
        } else {
            Session::flash('error', 'lỗi cập nhật abnr ghi' . $objItem->id);
            return redirect()->route($method_route, ['id' => $id]);
        }
    }
    public function add(Request $request)
    {
        $method_route = 'banner_add';
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            ////
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTest = new Banner();
            $res = $modelTest->saveNew($params);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm thành công');
            } else {
                Session::flash('error', 'Lỗi thêm mới người dùng');
                return redirect()->route($method_route);
            }
        }
        return view("admin/banner.add", $this->v);
    }
    public function detail($id)
    {
        $objBanner = new Banner();
        $objItem = $objBanner->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin/banner.edit", $this->v);
    }
    public function uploadFile($file)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('cmnd', $fileName, 'public');
    }
}
