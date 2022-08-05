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
}
