@extends('client.layout')
@section('content')
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" style="background-image: url('img/explore.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Our News</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top padding-bottom-smaller z-bigger background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="subtitle with-line text-center mb-4">journal</div>
					<h3 class="text-center padding-bottom-small">latest news</h3>
				</div>
				<div class="section clearfix"></div>
				 @foreach ($blog as $item)
                        <div class="col-md-6 col-xl-4">
							<div class="room-box background-white">
								<img src="{{ asset('img/blog/bv11.jpg')}}" alt="">
								<div class="room-box-in">
									<h6 class="">{{$item->title}}</h6>
									<p class="mt-3">{{$item->discription}}</p>
									<a class="mt-1 btn btn-primary" href="post.html">read more</a>
									<div class="room-icons news-tags mt-4 pt-4">
										<a href="#">luxury</a>
										<a href="#">vacation</a>
										<a href="#">travel</a>
									</div>
								</div>
							</div>
						</div>
				@endforeach
				
			</div>
		</div>	
	</div>
	
	<div class="section padding-bottom-smaller z-bigger background-grey over-hide">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="project-nav-wrap">
						<a href="#"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">new<div class="text-on-hover">latest news</div></div></a>
						
						<a href="#"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">old<div class="text-on-hover">older news</div></div></a>
						{{$blog->links()}}
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