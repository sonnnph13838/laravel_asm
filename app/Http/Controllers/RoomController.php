<?php

namespace App\Http\Controllers;

use App\Models\Kind_of_room;
use App\Models\List_booking;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Room();
        $this->v['list_room'] = $opj->loadList1();
        return view("client.room", $this->v,);
    }
    public function index1()
    {
        $opj = new Room();
        $this->v['list_room'] = $opj->loadList();
        return view("admin/room.index", $this->v);
    }
    public function roomDetail($id)
    {
        $opj = new Room();
        $this->v['room'] = $opj->roomDetail($id);
        $obj = new Service();
        $this->v['list_service'] = $obj->loadList();
        return view("client.room_detail", $this->v,);
    }
    public function add(Request $request)
    {
        
        $obj = new Kind_of_room();
        $this->v['list_kind_of_room'] = $obj->loadList();
        $method_route = 'room_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            //dd($request->file('image')->isValid());
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $param['cols']['image'] = $this->uploadFile($request->file('image'));
            }
            $modelTest = new Room();
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
        return view("admin/room.add", $this->v);
    }

    public function uploadFile($file){
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('image',$fileName,'public');

    public function detail($id)
    {
        $obj = new Kind_of_room();
        $this->v['list_kind_of_room'] = $obj->loadListKind();
        $objRoom = new Room();
        $objItem = $objRoom->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin/room.edit", $this->v);
    }
    public function update($id, Request $request)
    {

        $method_route = 'room_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        $objRoom = new Room();
        $objItem = $objRoom->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objRoom->SaveUpdate($params);
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
    public function booking($id, Request $request)
    {
        $obj = new Room();
        $this->v['room'] = $obj->loadOne($id);
        $obj = new Service();
        $this->v['list_service'] = $obj->loadList();
        $method_route = 'booking';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new List_booking();
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
        return view("client.room_detail", $this->v,);
    }
}
