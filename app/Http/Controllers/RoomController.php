<?php

namespace App\Http\Controllers;

use App\Models\Kind_of_room;
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
        return view("client.room", $this->v);
    }
    public function index1()
    {
        $opj = new Room();
        $this->v['list_room'] = $opj->loadList();
        return view("admin/room.index", $this->v);
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
            if($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid()){
                $params['cols']['image'] = $this->uploadFile($request->file('cmt_mat_truoc'));
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
        return $file->storeAs('cmnd',$fileName,'public');
    }
}
