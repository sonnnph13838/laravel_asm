<?php

namespace App\Http\Controllers;

use App\Models\List_booking;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class List_bookingController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function add(Request $request)
    {

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
        return view("client.room_detail", $this->v);
    }
}
