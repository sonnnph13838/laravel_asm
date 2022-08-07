<style>
	.background-dark h3{
		text-align:center; 
		color:white
	}
	.background-dark ul{
		list-style:none;
	}
	.background-dark ul li{
		margin-top: 10px;
		margin-left: -25px;
		width: 100%;
    	border-bottom: 1px solid #6dc234;
	}
	.background-dark a{
		color: white;
	}
	.background-dark a:hover{
		color: #6dc234;
	}
	.selecteurPrix {
		margin-top: 40px
	}
</style>
@extends('client.layout')
@section('content')

<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" style="background-image: url('	https://ivang-design.com/thalia/img/rooms.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">PHÒNG</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top-bottom z-bigger">
		<div class="section z-bigger">		
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="row">
							@foreach ($list_room as $item)
								<div class="col-lg-6">
								<div class="room-box background-grey">
									<div class="room-name">{{$item->name}}</div>
									<div class="room-per">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<img src="{{asset('img/home3.jpg')}}" alt="">
									<div class="room-box-in">
										<h5 class="">{{$item->name}}</h5>
										<p class="mt-3" >{{$item->discription}}</p>
										<a class="mt-1 btn btn-primary" href="{{route('room_details', ['id' => $item->id])}}"> Đặt Ngay {{$item->price}}</a>
										<div class="room-icons mt-4 pt-4">
											<img src="img/5.svg" alt="">
											<img src="img/2.svg" alt="">
											<img src="img/3.svg" alt="">
											<a href="rooms-gallery.html">Chi Tiết</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-lg-4 order-first order-lg-last">
						<div class="section background-dark p-4">	
							<div class="row">
								<div class="col-12">
									<h3 >Danh Sách Loại Phòng</h3>
									<ul>
									@foreach ($list_kind as $item)
										<li ><a  href="{{route('room_by_cate', ['id_kind_of_room' => $item->id])}}">{{$item->name}}</a></li>
									@endforeach
									</ul>
								</div>

								<div class="col-12 pt-5">
									<h3>Giá</h3>
									<div class="selecteurPrix">
										<div class="range-slider">
											<input class="input-range" type="range" value="100" min="1" max="500">
											<div class="valeurPrix">
												<span class="range-value"></span>
											</div>
										</div>
									</div>									
								</div>
								<div class="col-12 pt-4">
										<input type="submit" class="booking-button" value="Lọc">
										{{-- <a class="booking-button" href="searc">book now</a> --}}
									</div>
							</div>
						</div>
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
							<img src="{{asset('img/ser-1.jpg')}}" alt="">
							<div class="services-text-over">spa salon</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('img/ser-2.jpg')}}" alt="">
							<div class="services-text-over">restaurant</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('img/ser-3.jpg')}}" alt="">
							<div class="services-text-over">pool</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="{{asset('img/ser-4.jpg')}}" alt="">
							<div class="services-text-over">activities</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection