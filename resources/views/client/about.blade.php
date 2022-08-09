@extends('client.layout')
@section('content')

	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div id="poster_background-about"></div>
		<div id="video-wrap" class="parallax-top">
			<video id="video_background" preload="auto" autoplay loop="loop" muted="muted" poster="img/trans.png"> 
				<source src="video/video-about.mp4" type="video/mp4"> 
			</video>
		</div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Giới Thiệu</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">Vài Điều Về Chúng Tôi</div>
					<h3 class="text-center padding-bottom-small">Khách Sạn</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-sm-6 col-lg-4">
					<div class="services-box text-center">
						<img src="https://ivang-design.com/thalia/img/1.svg" alt="">
						<h5 class="mt-2">Không Hút Thuốc</h5>
						<p class="mt-3">Phòng Không Hút Thuốc</p>
						<a class="mt-1 btn btn-primary" href="services.html">chi Tiết</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
					<div class="services-box text-center">
						<img src="https://ivang-design.com/thalia/img/2.svg" alt="">
						<h5 class="mt-2">Giường King</h5>
						<p class="mt-3">Giường rộng rãi , sang trọng và thoải mãi.</p>
						<a class="mt-1 btn btn-primary" href="services.html">Chi Tiết</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
					<div class="services-box text-center">
						<img src="https://ivang-design.com/thalia/img/3.svg" alt="">
						<h5 class="mt-2">Thuê Du Thuyền</h5>
						<p class="mt-3">Dịch vụ thuê du thuyền, sang trọng.</p>
						<a class="mt-1 btn btn-primary" href="services.html">Chi Tiết</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="https://ivang-design.com/thalia/img/4.svg" alt="">
						<h5 class="mt-2">Dồ Uống Free</h5>
						<p class="mt-3">cung cấp đồ uống miễn phí</p>
						<a class="mt-1 btn btn-primary" href="services.html">Chi Tiết</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="https://ivang-design.com/thalia/img/5.svg" alt="">
						<h5 class="mt-2">Hồ Bơi Free</h5>
						<p class="mt-3">Hồ bơi sang trọng</p>
						<a class="mt-1 btn btn-primary" href="services.html">Chi Tiết</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="	https://ivang-design.com/thalia/img/6.svg" alt="">
						<h5 class="mt-2">Thức Ăn đéo free</h5>
						<p class="mt-3">Thức ăn sang trọng</p>
						<a class="mt-1 btn btn-primary" href="services.html">Chi Tiết</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section background-grey over-hide">
		<div class="container-fluid px-0">
			<div class="row mx-0">
				<div class="col-xl-6 px-0">
					<div class="img-wrap" id="rev-1">
						<img src="{{asset('img/home2.jpg')}}" alt="">
						<div class="text-element-over">Phòng Có Bể Bơi</div>
					</div>
				</div>
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Phòng Có Bể Bơi</h3>
							<p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-5 btn btn-primary" href="search.html">check availability</a>
						</div>	
					</div>
				</div>
			</div>
			<div class="row mx-0">
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 pb-5 pb-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Phòng Có View Biển</h3>
							<p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-5 btn btn-primary" href="search.html">check availability</a>
						</div>	
					</div>
				</div>
				<div class="col-xl-6 px-0 order-first order-xl-last mt-5 mt-xl-0">
					<div class="img-wrap" id="rev-2">
						<img src="{{asset('img/home3.jpg')}}" alt="">
						<div class="text-element-over">Phòng Có View Biển</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url('https://ivang-design.com/thalia/img/5.jpg')"></div>
		<div class="section z-bigger">		
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div id="owl-sep-1" class="owl-carousel owl-theme">								 
							<div class="item">						
								<div class="quote-sep">	
									<h4>"Chilling out on the bed in your hotel room watching television, while wearing your own pajamas, is sometimes the best part of a vacation."</h4>
									<h6>Jason Salvatore</h6>	
								</div>											
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"Every good day starts off with a cappuccino, and there's no place better to enjoy some frothy caffeine than at the Thalia Hotel."</h4>
									<h6>Terry Mitchell</h6>	
								</div>									
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"I still enjoy traveling a lot. I mean, it amazes me that I still get excited in hotel rooms just to see what kind of shampoo they've left me."</h4>
									<h6>Michael Brighton</h6>
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