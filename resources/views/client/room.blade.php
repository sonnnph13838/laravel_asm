@extends('client.layout')
@section('content')

<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" style="background-image: url('img/1.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Search</div>
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
									<img id="mat_truoc_preview"src="{{ $item->image2?''.Storage::url($item->image2):'http://placehold.it/100x100' }}"alt="your image"style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive"/>
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
									<div class="input-daterange input-group" id="flight-datepicker">
										<div class="row">	
											<div class="col-12">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>
													<span class="date-text date-depart"></span>
												</div>
											</div>
											<div class="col-12 pt-4">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>
													<span class="date-text date-return"></span>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-12 pt-4">
											<select name="adults" class="wide">
												<option data-display="adults">adults</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-12 pt-4">
											<select name="children" class="wide">
												<option data-display="children">children</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-12 pt-5">
									<h6 class="color-white mb-3">Max night price:</h6>
									<div class="selecteurPrix">
										<div class="range-slider">
											<input class="input-range" type="range" value="100" min="1" max="500">
											<div class="valeurPrix">
												<span class="range-value"></span>
											</div>
										</div>
									</div>									
								</div>
								<div class="col-12 col-md-6 col-lg-12 pt-5">
									<h6 class="color-white mb-3">Services:</h6>
									<ul class="list">
										{{-- @foreach ($list_kind_of_room -> $item)
										<li class="list__item">
											<label class="label--checkbox">
												{{$item->name}}
											</label>
										</li>
										@endforeach --}}
	
									</ul>									
								</div>
								<div class="col-12 col-md-6 col-lg-12 pt-5">
									<h6 class="color-white mb-3">Extra services:</h6>
									<ul class="list">
										<li class="list__item">
											<label class="label--checkbox">
												<input type="checkbox" class="checkbox">
												breakfast
											</label>
										</li>
										<li class="list__item">
											<label class="label--checkbox">
												<input type="checkbox" class="checkbox">
												swimming pool
											</label>
										</li>
										<li class="list__item">
											<label class="label--checkbox">
												<input type="checkbox" class="checkbox">
												car rental
											</label>
										</li>
										<li class="list__item">
											<label class="label--checkbox">
												<input type="checkbox" class="checkbox">
												sea view
											</label>
										</li>
										<li class="list__item">
											<label class="label--checkbox">
												<input type="checkbox" class="checkbox">
												laundry
											</label>
										</li>
									</ul>									
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