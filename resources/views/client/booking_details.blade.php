<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
@extends('client.layout')
@section('content')
<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top">
        <img src="{{asset('img/blogban.jpg')}}" alt="" style="width:100%" height="100%">
    </div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Bài Viết</div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table id="customers">
                        <tr>
                            <th>Tên Phòng</th>
                            <th>Giá</th>
                            <th>Checkin-Date</th>
                            <th>Checkout-Date</th>
                            <th>Số lượng</th>

                        </tr>
                                <tr>
                                    <td>{{$room->name}}</td>
                                    <td>{{$room->price}}</td>
                                    <td>{{$booking->checkin_date}}</td>
                                    <td>{{$booking->checkout_date}}</td>
                                    <td>{{$booking->quantity}}</td>
                                </tr>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection