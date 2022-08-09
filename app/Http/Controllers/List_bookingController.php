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
    public function index()
    {
        $opj = new List_booking();
        $this->v['list_booking'] = $opj->loadList1();
        return view("admin/list_booking.index", $this->v,);
    }
    public function booked($id_user)
    {
        $opj = new Room();
        $this->v['list_room'] = $opj->loadList();
        $opj = new List_booking();
        $this->v['list_book'] = $opj->loadList($id_user);
        return view("client.booked", $this->v);
    }
    public function bookingDetail($id)
    {

        $opj = new List_booking();
        $this->v['booking'] = $opj->bookingDetail($id);
        $id_room = $this->v['booking']->id_room;
        $opj = new Room();
        $this->v['room'] = $opj->roomDetail($id_room);
        return view("client.booking_details", $this->v,);
    }
    public function deleteBooking($id)
    {
        $opj = new List_booking();
        $this->v['list_book'] = $opj->deleteBooking($id);
        return back();
    }
}
