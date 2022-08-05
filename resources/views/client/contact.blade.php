@extends('client.layout')
@section('content')
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" style="background-image: url('img/gallery/10.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Get in Touch</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top-bottom-smaller background-dark-2 over-hide">		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">	
					<h5 class="color-grey">A new dimension of luxury.</h5>
					<p class="color-white mt-3 mb-3"><em>our presentation, 0:48 min</em></p>
					<a href="https://vimeo.com/54851233" class="video-button" data-fancybox><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="section padding-top z-bigger">
		<div class="container">
			<div class="row justify-content-center padding-bottom-smaller">
				<div class="col-md-8">
					<div class="subtitle with-line text-center mb-4">get in touch</div>
					<h3 class="text-center padding-bottom-small">drop us a line</h3>
				</div>
				<div class="section clearfix"></div>
				<form action="" method="post" >
					@csrf
					<input name="name" type="text" placeholder="Your Name: *" autocomplete="off" value="@isset($request['name']){{ $request['name'] }}@endisset"/ >


					<input name="email" type="text"  placeholder="E-Mail: *" autocomplete="off" value="@isset($request['email']){{ $request['email'] }}@endisset"/>


					<textarea name="messages" placeholder="Tell Us Everything" value="@isset($request['messages']){{ $request['messages'] }}@endisset"></textarea>

				<div class="section clearfix"></div>
				<div class="section clearfix"></div>
				<div class="col-md-8 mt-3 ajax-form text-center">
					<input type="submit" class="send_message" id="send" value="Gửi">
					
				</div>
				</form>
				<div class="section clearfix"></div>
				<div class="col-md-8 padding-top-bottom">
					<div class="sep-line"></div>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-6 col-lg-4">
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Address:</p>
						</div>
						<div class="address-in text-right">
							<p>Avenue Str. 328</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">City:</p>
						</div>
						<div class="address-in text-right">
							<p>Thessaloniki</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Check-In:</p>
						</div>
						<div class="address-in text-right">
							<p>14:00 pm</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Phone:</p>
						</div>
						<div class="address-in text-right">
							<p>+21 60 374 7537</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Email:</p>
						</div>
						<div class="address-in text-right">
							<p>info@hotel.com</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Check-Out:</p>
						</div>
						<div class="address-in text-right">
							<p>11:00 am</p>
						</div>
					</div>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-8 text-center mt-5" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<p class="mb-0"><em>available at: 8am - 10pm</em></p>
					<h2 class="text-opacity">+21 60 374 7537</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="subscribe-home">
						<input type="text" placeholder="your email here"/>
						<button data-lang="en">subscribe</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="section">
		<div id="owl-sep-2" class="owl-carousel owl-theme">								 
			<div class="item">	
				<a href="img/gallery/1.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/1-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/2.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/2-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/3.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/3-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/4.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/4-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/5.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/5-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/6.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/6-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/7.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/7-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/8.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/8-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/9.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/9-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/10.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/10-s.jpg" alt="">
					</div>
				</a>
			</div>							 
			<div class="item">	
				<a href="img/gallery/1.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/1-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/2.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/2-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/3.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/3-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/4.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/4-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/5.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/5-s.jpg" alt="">
					</div>
				</a>
			</div>										 
		</div>
	</div>
@endsection