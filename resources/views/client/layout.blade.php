<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Thalia</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords" content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
    <meta property="og:title" content="Professional Creative Template" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Professional Creative Template" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
    <meta name="twitter:domain" content="http://ivang-design.com/" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="Professional Creative Template" />
    <meta name="twitter:image" content="http://ivang-design.com/" />

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/colors/color.css')}}" />

    <!-- Favicons
	================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>

<body>

    {{-- <div class="loader">
        <div class="loader__figure"></div>
    </div> --}}

    <svg class="hidden">
        <svg id="icon-nav" viewBox="0 0 152 63">
            <title>navarrow</title>
            <path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z" />
        </svg>
    </svg>


    <!-- Nav and Logo
	================================================== -->

    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu-top background-black">
            <div class="container">
                <div class="row">
                    <div class="col-6 px-0 px-md-3 pl-1 py-3">
                        <span class="call-top">call us:</span> <a href="#" class="call-top">(381) 60 422 4256</a>
                    </div>
                    <div class="col-6 px-0 px-md-3 py-3 text-right">
                        <a href="#" class="social-top">fb</a>
                        <a href="#" class="social-top">tw</a>
                        <div class="lang-wrap" style="text-align: center; width:100px">
							Tài Khoản
							<ul>
								<li><a href="#">Đăng Nhập</a></li>
								<li><a href="#">Đăng Kí</a></li>
								<li><a href="#"></a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <a href="index.html">
                <div class="logo">
                    <img src="{{ asset('img/logo.png')}}" alt="">
                </div>
            </a>
            <ul>
                <li>
                    <a class="curent-page" href="{{route('Home')}}">Trang Chủ</a>
                    <ul>
                        <li><a class="curent-page" href="index.html">Flip Slider</a></li>
                        <li><a href="index-1.html">Video Background</a></li>
                        <li><a href="index-2.html">Moving Image</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('Kind_of_room')}}">Phòng</a>
                    {{-- <ul>
                        <li><a href="rooms.html">Our Rooms</a></li>
                        <li><a href="rooms-gallery.html">Room Gallery</a></li>
                        <li><a href="rooms-video.html">Room Video</a></li>
                    </ul> --}}
                </li>
                {{-- <li>
                    <a href="#">pages</a>
                    <ul>
                        <li><a href="explore.html">Explore</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="tandc.html">Terms &amp; Conditions</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="restaurant.html">Restaurant</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{route('About')}}">Giói Thiệu</a>
                </li>
                <li>
                    <a href="{{route('Blog')}}">Bài Viết</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">Liên Hệ</a>
                </li>
                <li>
                    <a href="search.html"><span>book now</span></a>
                </li>
            </ul>
        </div>
    </nav>


@yield('content')



{{-- footer --}}
    <div class="section padding-top-bottom-small background-black over-hide footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-left">
                    <img src="{{ asset('img/logo.png')}}" alt="">
                    <p class="color-grey mt-4">Avenue Street 3284<br>Thessaloniki</p>
                </div>
                <div class="col-md-4 text-center text-md-left">
                    <h6 class="color-white mb-3">information</h6>
                    <a href="tandc.html">terms &amp; conditions</a>
                    <a href="services.html">services</a>
                    <a href="restaurant.html">restaurant</a>
                    <a href="testimonials.html">testimonials</a>
                    <a href="gallery.html">gallery &amp; images</a>
                </div>
                <div class="col-md-5 mt-4 mt-md-0 text-center text-md-left logos-footer">
                    <h6 class="color-white mb-3">about us</h6>
                    <p class="color-grey mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                    <img src="{{ asset('img/logos/1.png')}}" alt="">
                    <img src="{{ asset('img/logos/2.png')}}" alt="">
                    <img src="{{ asset('img/logos/3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section py-4 background-dark over-hide footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                    <p>2019 © Thalia. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <a href="#" class="social-footer-bottom">facebook</a>
                    <a href="#" class="social-footer-bottom">twitter</a>
                    <a href="#" class="social-footer-bottom">instagram</a>
                </div>
            </div>
        </div>
    </div>


    <div class="scroll-to-top"></div>


    <!-- JAVASCRIPT
    ================================================== -->
    <script src="{{ asset('js/jquery.min.js')}}">
    </script>
    <script src="{{ asset('js/popper.min.js')}}">
    </script>
    <script src="{{ asset('js/bootstrap.min.js')}}">
    </script>
    <script src="{{ asset('js/plugins.js')}}">
    </script>
    <script src="{{ asset('js/flip-slider.js')}}">
    </script>
    <script src="{{ asset('js/reveal-home.js')}}">
    </script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <!-- End Document
================================================== -->
</body>

</html>