@php
    $objUser = \Illuminate\Support\Facades\Auth::user();
@endphp

@extends('client.layout')
@section('content')
<!-- Primary Page Layout
	================================================== -->

<div class="section big-55-height over-hide">

	<div class="parallax parallax-top" style="background-image: url('img/rooms.jpg')"></div>
	<div class="dark-over-pages"></div>

	<div class="hero-center-section pages">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 parallax-fade-top">
					<div class="hero-text">{{$room->name}}</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section background-dark padding-top-bottom-smaller over-hide">
	<div class="section z-bigger">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
					<div class="amenities">
						<img src="img/icons/1.svg" alt="">
						<p>no smoking</p>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
					<div class="amenities">
						<img src="img/icons/2.svg" alt="">
						<p>big beds</p>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-md-0">
					<div class="amenities">
						<img src="img/icons/3.svg" alt="">
						<p>yacht riding</p>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
					<div class="amenities">
						<img src="img/icons/4.svg" alt="">
						<p>free drinks</p>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
					<div class="amenities">
						<img src="img/icons/5.svg" alt="">
						<p>swimming pool</p>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
					<div class="amenities">
						<img src="img/icons/6.svg" alt="">
						<p>room breakfast</p>
					</div>
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
					<div class="section">
						<div class="customNavigation rooms-sinc-1-2">
							<a class="prev-rooms-sync-1"></a>
							<a class="next-rooms-sync-1"></a>
						</div>
						<div id="rooms-sync1" class="owl-carousel">
								<img id="mat_truoc_preview" width="100%" src="{{ $room->image?''.Storage::url($room->image):'http://placehold.it/1000x1000' }}" alt="your image"  class="img-responsive" />
								<img id="mat_truoc_preview1" width="100%" src="{{ $room->image1?''.Storage::url($room->image1):'http://placehold.it/100x100' }}" alt="your image"  class="img-responsive" />
								<img id="mat_truoc_preview2" width="100%" src="{{ $room->image2?''.Storage::url($room->image2):'http://placehold.it/100x100' }}" alt="your image"  class="img-responsive" />
								<img id="mat_truoc_preview3" width="100%" src="{{ $room->image3?''.Storage::url($room->image3):'http://placehold.it/100x100' }}" alt="your image"  class="img-responsive" />
								<img id="mat_truoc_preview4" width="100%" src="{{ $room->image4?''.Storage::url($room->image4):'http://placehold.it/100x100' }}" alt="your image"  class="img-responsive" />
						</div>
					</div>
					<div class="section">
						<div id="rooms-sync2" class="owl-carousel">
						<div class="item">
								<img id="mat_truoc_preview" src="{{ $room->image?''.Storage::url($room->image):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
							</div>
							<div class="item">
								<img id="mat_truoc_preview1" src="{{ $room->image1?''.Storage::url($room->image1):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
							</div>
							<div class="item">
								<img id="mat_truoc_preview2" src="{{ $room->image2?''.Storage::url($room->image2):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
							</div>
							<div class="item">
								<img id="mat_truoc_preview3" src="{{ $room->image3?''.Storage::url($room->image3):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
							</div>
							<div class="item">
								<img id="mat_truoc_preview4" src="{{ $room->image4?''.Storage::url($room->image4):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
							</div>
						</div>
						<div class="section pt-5">
							<h5>discription</h5>
							<p class="mt-3">{{$room->discription}}</p>
						</div>
						<div class="section pt-4">
							<div class="row">
								<div class="col-12">
									<h5 class="mb-3">Overview</h5>
								</div>
								<div class="col-lg-6">
									<p><strong class="color-black">Room size:</strong> 47 - 54 sq m</p>
									<p><strong class="color-black">Occupancy:</strong> Up to 4 adulds</p>
									<p><strong class="color-black">View:</strong> Sea view</p>
									<p><strong class="color-black">Smoking:</strong> No smoking</p>
								</div>
								<div class="col-lg-6">
									<p><strong class="color-black">Bed size:</strong> King and regular</p>
									<p><strong class="color-black">Location:</strong> Big room 2nd floor</p>
									<p><strong class="color-black">Room service:</strong> Yes</p>
									<p><strong class="color-black">Swimming pool:</strong> Yes</p>
								</div>
							</div>
						</div>
						<div class="section pt-4">
							<h5>Features</h5>
							<p class="mt-3">{{$room->features}}</p>
						</div>
					</div>

					
				</div>
				<div class="col-lg-4 order-first order-lg-last">
						<form action="" method="post">
							@csrf
							<div class="section background-dark p-4">
								<div class="row">
									<div class="col-12">
										<div class="input-daterange input-group" id="flight-datepicker">
											<div class="row">
												<div class="col-12">
													<div class="form-item">
														<span class="fontawesome-calendar"></span>
														<input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="checkin_date" placeholder="chech-in date" data-date-format="DD, MM d" value="@isset($request['checkin_date']){{ $request['checkin_date'] }}@endisset" />
														<span class="date-text date-depart"></span>
													</div>
												</div>
												<div class="col-12 pt-4">
													<div class="form-item">
														<span class="fontawesome-calendar"></span>
														<input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="checkout_date" placeholder="check-out date" data-date-format="DD, MM d" value="@isset($request['checkout_date']){{ $request['checkout_date'] }}@endisset" />
														<span class="date-text date-return"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="row">
											<div class="col-12 pt-4">
												<select name="quantity" class="wide" value="@isset($request['quantity']){{ $request['quantity'] }}@endisset">
													<option data-display="quantity">quantity</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>

										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-12 pt-5">

									<div>
										<input type="hidden" name="id_user" value="1">
										<input type="hidden" name="id_room" value="1">
										<input type="hidden" name="id_service" value="1">

											<div>
												<input type="hidden" name="id_service" value="1">
											<input type="hidden" name="id_user" value="{{$objUser->id}}">
											<input type="hidden" name="id_room" value="{{$room->id}}">
											</div>								
									</div>
									<div class="col-12 pt-4">
										<input type="submit" class="booking-button" value="BOOKING">
										{{-- <a class="booking-button" href="searc">book now</a> --}}

									</div>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>

</div>

<div class="section padding-bottom over-hide">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
				<div class="room-box background-grey">
					<div class="room-name">suite tanya</div>
					<div class="room-per">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<img src="img/room3.jpg" alt="">
					<div class="room-box-in">
						<h5 class="">pool suite</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 130$</a>
						<div class="room-icons mt-4 pt-4">
							<img src="img/5.svg" alt="">
							<img src="img/2.svg" alt="">
							<img src="img/3.svg" alt="">
							<a href="rooms-gallery.html">full info</a>

	
	<div class="section padding-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<div class="room-box background-grey">
						<div class="room-name">suite tanya</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room3.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">pool suite</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 130$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="https://ivang-design.com/thalia/img/5.svg" alt="">
								<img src="https://ivang-design.com/thalia/img/2.svg" alt="">
								<img src="https://ivang-design.com/thalia/img/3.svg" alt="">
								<a href="">full info</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-4 mt-lg-0" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
				<div class="room-box background-grey">
					<div class="room-name">suite helen</div>
					<div class="room-per">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="img/room4.jpg" alt="">
					<div class="room-box-in">
						<h5 class="">small room</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 80$</a>
						<div class="room-icons mt-4 pt-4">
							<img src="img/4.svg" alt="">
							<img src="img/2.svg" alt="">
							<img src="img/6.svg" alt="">
							<a href="rooms-gallery.html">full info</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-4 mt-lg-0" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.6s">
				<div class="room-box background-grey">
					<div class="room-name">suite andrea</div>
					<div class="room-per">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<img src="img/room5.jpg" alt="">
					<div class="room-box-in">
						<h5 class="">Apartment</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
						<div class="room-icons mt-4 pt-4">
							<img src="img/5.svg" alt="">
							<img src="img/2.svg" alt="">
							<img src="img/3.svg" alt="">
							<a href="rooms-gallery.html">full info</a>
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