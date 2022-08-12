@extends('client.layout')
@section('content')
<!-- Primary Page Layout
	================================================== -->

<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('https://ivang-design.com/thalia/img/explore.jpg')">

    </div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Thanh Toán</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top padding-bottom-smaller z-bigger background-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Thông tin</div>
                <h3 class="text-center padding-bottom-small">Thanh toán</h3>
            </div>
            <div class="section clearfix"></div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <img src="{{$room->image}}" class="img-fluid" alt="...">
            <p>Tên phòng: {{$room->name}} / Giá: {{$room->price}}</p>
            <p>Số Lượng: {{$list_booking->quantity}}</p>
            <p>Ngày đặt: {{$list_booking->checkin_date}}</p>
            <p>Ngày đi: {{$list_booking->checkout_date}}</p>
        </div>
        <div class="col">
            <h4>Name: {{$list_pay->name}}</h4>
            <p> </p>
            <h4>Address: {{$list_pay->address}}</h4>
            <p> </p>
            <h4>Email: {{$list_pay->email}}</h4>
            <p> </p>
            <h4>Phone Number: {{$list_pay->tel}}</h4>
            <p> </p>
            <div class="" style="margin-top: 50px;">
            <button class="btn btn-danger"><a href="">Cancel</a></button>
            <button class="btn btn-secondary"><a href="{{route("bank",['id'=>request()->route('id')])}}">Next</a></button>
            </div>
        </div>
    </div>
</div>
<div class="section padding-bottom-smaller z-bigger background-grey over-hide">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-nav-wrap">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section background-dark over-hide">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-1.jpg" alt="">
                        <div class="services-text-over">spa salon</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-2.jpg" alt="">
                        <div class="services-text-over">restaurant</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-3.jpg" alt="">
                        <div class="services-text-over">pool</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-4.jpg" alt="">
                        <div class="services-text-over">activities</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection