<?php

namespace App\Http\Controllers;

use App\Models\Kind_of_room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Kind_of_roomController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        return view("kind_of_room.index");
    }
    public function add(Request $request)
    {

        $method_route = 'route_BackEnd_User_Add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new Kind_of_room();
            $res = $modelTest->saveNew($param);
            if ($res = null) {
                return Redirect::to('admin/add');
            } elseif ($res > 0) {
                Session::flash('success', 'Them moi thanh cong');
            } else {
                Session::flash('error', 'Loi them moi nguoi dung');
                return Redirect::to('admin/add');
            }
        }
        return view("admin/Kind_of_room.add", $this->v);
    }
}
