<?php

namespace App\Http\Controllers;

use App\Models\Room;
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
        $this->v['list_room'] = $opj->loadList();
        return view("admin/room.index", $this->v);
    }
    public function add(Request $request)
    {

        $method_route = 'Room_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
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
}
