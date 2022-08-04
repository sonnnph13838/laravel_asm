<?php

namespace App\Http\Controllers;

use App\Models\Kind_of_room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Kind_of_roomRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class Kind_of_roomController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Kind_of_room();
        $this->v['list_kind_of_room'] = $opj->loadListKind();
        return view("admin/kind_of_room.index", $this->v);
    }
    public function add(Kind_of_roomRequest $request)
    {

        $method_route = 'kind_of_room_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new Kind_of_room();
            $res = $modelTest->saveNew($param);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm thành công');
            } else {
                Session::flash('error', 'Lỗi thêm mới người dùng');
                return redirect()->route($method_route);
            }
        }
        return view("admin/Kind_of_room.add", $this->v);
    }
    public function detail($id)
    {
        $objKind = new Kind_of_room();
        $objItem = $objKind->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin/Kind_of_room.edit", $this->v);
    }
    public function update($id, Request $request)
    {
        $method_route = 'kind_of_room_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);
        $objKind = new Kind_of_room();
        $objItem = $objKind->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objKind->SaveUpdate($params);
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
}
