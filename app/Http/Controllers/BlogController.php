<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opjBlog = new Blog();
        $this->v['blog'] = $opjBlog->loadListBlog();
        return view('client.blog', $this->v);
    }

    public function deleteBlog($id)
    {
        $opj = new Blog();
        $this->v['list_blog'] = $opj->deleteBlog($id);
        return back();
    }
    public function index1()
    {
        $opjBlog = new Blog();
        $this->v['list_blog'] = $opjBlog->loadList();
        return view('admin.blog.index', $this->v);
    }
    public function add(Request $request)
    {
        $method_route = 'blog_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
                $param['cols']['image1'] = $this->uploadFile($request->file('image1'));
            }
            $modelTest = new Blog();
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
        return view("admin.blog.add", $this->v);
    }
    public function detail($id)
    {
        $objRoom = new Blog();
        $objItem = $objRoom->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin.blog.edit", $this->v);
    }

    public function update($id, Request $request)
    {

        $method_route = 'blog_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);

        if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
            $params['cols']['image1'] = $this->uploadFile($request->file('image1'));
        }
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $params['cols']['image2'] = $this->uploadFile($request->file('image2'));
        }
        if ($request->hasFile('image3') && $request->file('image3')->isValid()) {
            $params['cols']['image3'] = $this->uploadFile($request->file('image3'));
        }
        $objBlog = new Blog();
        $objItem = $objBlog->loadOne($id);
        $params['cols']['id'] = $id;
        $res = $objBlog->SaveUpdate($params);
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
    public function uploadFile($file)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('images', $fileName, 'public');
    }
}
