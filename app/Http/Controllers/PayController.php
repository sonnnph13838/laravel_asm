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
        $method_route = 'pay_add';
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
            } else {
                Session::flash('error', 'Lỗi thêm mới người dùng');
                return redirect()->route($method_route);
            }
        }
        return view('client.pay',$this->v);
    }
}
