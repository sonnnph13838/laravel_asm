<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index(){
        $obj = new BannerModel();
        $this->v['list_banner'] = $obj->loadList();
        return view("admin/banner.index", $this->v);
    }
    public function bin(){
    }
    public function add(Request $request)
    {

        $method_route = 'banner_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $param['cols']['image'] = $this->uploadFile($request->file('image'));
            }
            $modelTest = new BannerModel();
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
        return view("admin/banner.add", $this->v);
    }
    public function detail($id)
    {
        $banner = new BannerModel();
        $objBn = $banner->loadOne($id);
        $this->v['objBanner'] = $objBn;
        return view("admin/banner.edit", $this->v);
    }
    public function update($id, Request $request)
    {
        $method_route = 'route_BackEnd_Banner_Detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $params['cols']['image'] = $this->uploadFile($request->file('image'));
        }
        $banner = new BannerModel();
        $objItem = $banner->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $banner->saveUpdate($params);
        if($res == null){
            return redirect()->route($method_route,['id'=>$id]);
        }elseif ($res == 1){
            Session::flash('success','Cap nhat ban ghi'.$objItem->id . 'Thanh cong');
            return redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error','Loi cap nhat ban ghi '.$objItem->id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function delete($id)
    {
       
       
        return view("admin/banner.index", $this->v);
    }
    public function uploadFile($file){
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('image',$fileName,'public');
    }
}
