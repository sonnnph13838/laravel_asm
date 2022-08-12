<?php

namespace App\Http\Controllers;

use App\Models\List_booking;
use App\Models\Pay;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PayController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index($id,Request $request)
    {
        $opj = new List_booking();
        $this->v['list_booking'] = $opj->bookingDetail($id);
        $id_room = $this->v['list_booking']->id_room;
        $opj = new Room();
        $this->v['room'] = $opj->roomDetail($id_room);
        
        $method_route = 'pay';
        //$method_router = 'pay_detail';
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            $modelTest = new Pay();
            $res = $modelTest->saveNew($params);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm thành công');
                return redirect('pay_detail/'. $res);
            } else {
                Session::flash('error', 'Lỗi thêm mới người dùng');
                return redirect()->route($method_route);
            }
        }
        return view('client.pay',$this->v);
    }
    public function detailPay($id){   
        $obj = new Pay();
        $this->v['list_pay'] = $obj->loadOne($id);
        $id_list_booking = $this->v['list_pay']->id_list_booking;
        $opj = new List_booking();
        $this->v['list_booking'] = $opj->bookingDetail($id_list_booking);
        $id_room = $this->v['list_booking']->id_room;
        $opj = new Room();
        $this->v['room'] = $opj->roomDetail($id_room);
        return view('client.pay_detail',$this->v);
    }
    public function bank(){
        return view('client.bank',$this->v);
    }
    public function saveBank($id, Request $request){
        $method_route = 'save_bank';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $params['cols']['image'] = $this->uploadFile($request->file('image'));
        }
        $objRoom = new Pay();
        $objItem = $objRoom->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objRoom->SaveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route, ['id' => $id]);
        } else if ($res == 1) {
            Session::flash('success', 'Cập nhật bản ghi' . $objItem->id . 'thành công');
            return redirect()->route('end');
        } else {
            Session::flash('error', 'lỗi cập nhật abnr ghi' . $objItem->id);
            return redirect()->route($method_route , ['id' => $id]);
        }
        return view('client.bank',$this->v);
    }
    public function uploadFile($file)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('images', $fileName, 'public');
    }
    public function end(){
        return view('client.end');
    }
}
