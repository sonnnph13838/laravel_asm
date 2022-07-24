<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

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
}
