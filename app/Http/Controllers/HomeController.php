<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $this->v['list_room'] = $opj->loadListTop4();
        return view("client.index", $this->v);
    }
}
