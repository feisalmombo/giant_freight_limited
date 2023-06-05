
<!DOCTYPE html>
<html>

<head>

 <title>Oligarchy Logistics - Welcome Page</title>
        <meta name="description" content="Oligarchy Logistics">
        <meta name="author" content="Oligarchy Logistics">
        <meta name="keywords" content="transportation, logistics, transportation , logistics , cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('giant/css/bootstrap.css')}}"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="{{asset('giant/css/animate.css')}}"/><!-- used for animations -->
        <link rel='stylesheet' href="{{asset('giant/owl-carousel/owl.carousel.css')}}"/><!-- Client carousel -->
        <link rel="stylesheet" href="{{asset('giant/masterslider/style/masterslider.css')}}" /><!-- Master slider css -->
        <link rel="stylesheet" href="{{asset('giant/masterslider/skins/default/style.css')}}" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="{{asset('giant/css/style.css')}}"/><!-- template styles -->
        <link rel="stylesheet" href="{{asset('giant/css/color-default.css')}}"/><!-- template main color -->
        <link rel="stylesheet" href="{{asset('giant/css/retina.css')}}"/><!-- retina ready styles -->
        <link rel="stylesheet" href="{{asset('giant/css/responsive.css')}}"/><!-- responsive styles -->

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="{{asset('giant/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}"/><!-- Fontawesome icons css --></head>
    <body>
        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="#" style="padding-bottom: 3px; font-size: 13px; color: #2780BA; font-weight: 700;">
                                                 {{--  <img src="{{asset('giant/img/logo.png')}}" alt="Giant Freight"/>  --}}
                                                 Oligarchy Logistics
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
											<li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{url('/about')}}">About Us</a></li>

											<li class="dropdown">
                                                <a href="{{ url('/') }}" data-toggle="dropdown" class="dropdown-toggle">Our Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/road-transport')}}">Road Transport</a></li>
                                                    <li><a href="{{url('/air-freight')}}">Air Freight</a></li>
                                                    <li><a href="{{ url('/ocean-freight') }}">Ocean Freight</a></li>
                                                    <li><a href="{{ url('/customs-clearance') }}">Customs Clearance</a></li>
                                                    <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                    <li><a href="{{ url('/value-added') }}">Value Added Servives</a></li>
                                                    <li><a href="{{ url('/rail-services') }}">Railway Services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


											{{--  <li><a href="#">Media</a></li>  --}}

											<li><a href="{{ url('/contact') }}">Contacts Us</a></li>

                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="{{ url('/') }}">Home</a>

                                                </li>

                                                <li><a href="{{url('/about')}}">About</a></li>

                                                <li>
                                                    <a href="#">Our Services</a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="#">Services</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="{{url('/road-transport')}}">Road Transport</a></li>
                                                                <li><a href="{{url('/air-freight')}}">Air Freight</a></li>
                                                                <li><a href="{{ url('/ocean-freight') }}">Ocean Freight</a></li>
                                                                <li><a href="{{ url('/customs-clearance') }}">Customs Clearance</a></li>
                                                                <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                                <li><a href="{{ url('/value-added') }}">Value Added Servives</a></li>
                                                                <li><a href="{{ url('/rail-services') }}">Railway Services</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>


												<li><a href="#">Media</a></li>
												<li><a href="#">Terms & Conditions</a></li>
												<li><a href="{{ url('/contact') }}">Contacts</a></li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                    </div><!-- MAIN NAVIGATION END -->

                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

        <!-- .master-slider start -->
        <div id="masterslider" class="master-slider ms-skin-default mb-0">
            <!-- slide start -->
            <div class="ms-slide">
                <img src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-01.jpg')}}" alt=""/>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 260px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    worldwide Freight Services
                </h2>

                {{--  <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 320px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    freight
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 380px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    services
                </h2>  --}}

                <img class="ms-layer" src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-02.png')}}" alt=""
                     style="left: 390px; top: 220px;"
                     data-type="image"
                     data-delay="100"
                     data-parallax="15"
                     />

                <p class="ms-layer pi-text"
                   style="left: 390px; top: 470px;"
                   data-type="text"
                   data-delay="100"
                   data-parallax="10"
                   >
                    Air freight all over
                </p>

                {{--  <p class="ms-layer pi-text"
                   style="left: 390px; top: 500px;"
                   data-type="text"
                   data-delay="100"
                   data-parallax="10"
                   >
                    We got it covered
                </p>  --}}
            </div><!-- slide end -->

            <!-- slide start -->
            <div class="ms-slide">
                <img src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-05.jpg')}}" alt=""/>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 340px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    Cargo Services
                </h2>

                {{--  <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 400px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    overland
                </h2>  --}}

                {{--  <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 460px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    or sea
                </h2>  --}}

                <img class="ms-layer" src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-04.png')}}" alt=""
                     style="left: 800px; top: 430px;"
                     data-type="image"
                     data-delay="100"
                     data-parallax="15"
                     />

                <img class="ms-layer" src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-03.png')}}" alt=""
                     style="left: 1200px; top: 220px;"
                     data-type="image"
                     data-delay="100"
                     data-parallax="30"
                     />

                <p class="ms-layer pi-text"
                   style="left: 395px; top: 520px;"
                   data-type="text"
                   data-delay="100"
                   data-parallax="10"
                   />
                    First freight services!
                </p>
            </div><!-- slide end -->
        </div><!-- .master-slider end -->

        <div class="page-content parallax parallax01 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action clearfix">
                            <div class="text">
                                <h2>Oligarchy Logistics is right for you</h2>
                                <p>
                                    Selecting all services of what Oligarchy Logistics can offer.
									we are not limited to a unit or sub-Saharan size load
									but its all about what comes and we can handle it for
									you at our best. We make sure to keep up with today
									standards to serve and expand and satisfy all our
									clients globally with integrity, professionalism and
									reliability.
                                </p>
                            </div><!-- .text end -->

                            <a href="" class="btn btn-big">
                                <span>get a quote</span>
                            </a>
                        </div><!-- .call-to-action end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.parallax end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="custom-heading02">
                        <h2>Our services</h2>
                        <p>
                            Oligarchy Logistics
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12 clearfix">
                        <div class="carousel-container">
                            <div id="services-carousel" class="owl-carousel owl-dot">
                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img01.jpg')}}" alt="Road Transport"/>

                                            <a href="{{ url('/road-transport') }}" class="read-more02">
                                                <span>
                                                    Read More
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div> <!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>ROAD TRANSPORT</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                We have a wide experience in overland
                                                industry specific logistic solutions like
                                                pharmaceutical logistics, retail, ship parts, chemical industry and
                                                automotive logistics by train or road.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img02.jpg')}}" alt="Ocean Freight"/>

                                            <a href="{{ url('/ocean-freight') }}" class="read-more02">
                                                <span>
                                                    Read More
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>OCEAN FREIGHT</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                We bring your goods safely to worldwide
                                                destinations with our great sea fright
                                                services. We offer LLC and FLC shipments
                                                that are fast and effective with no delays.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img03.jpg')}}" alt="Air Freight"/>

                                            <a href="{{ url('/air-freight') }}" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>AIR FREIGHT</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                We provide full supply chain management
                                                package including cost effective and fast
                                                air freight. You can also combine this
                                                package with other means of transportation.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img13.jpg')}}" alt="Warehousing"/>

                                            <a href="{{ url('/warehousing') }}" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>WAREHOUSING</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                Need custom logistic service? We got
                                                it covered. From overland, air, railway
                                                and sea transportation. Fast, safe
                                                and accurate shipment provided all
                                                over the globe directly to your home.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img14.jpg')}}" alt="Value Added Service"/>

                                            <a href="" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>VALUE ADDED SERVICE</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                Trucking offers intelligent warehouse
                                                solution. Lower your storage and
                                                good maintenance by using our modern
                                                and intelligent warehouses. You can
                                                see all locations on location page.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->

                                <div class="owl-item">
                                    <div class="service-feature-box">
                                        <div class="service-media">
                                            <img src="{{asset('giant/img/pics/img15.jpg')}}" alt="Customs Clearance"/>

                                            <a href="{{ url('/customs-clearance') }}" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>CUSTOMS CLEARANCE</h4>
                                            </div><!-- .custom-heading end -->

                                            <p>
                                                Don not know what mean of
                                                transportation would be right for
                                                you, or you need someone for full
                                                supply chain management? Please
                                                contact us. Our team of professionals
                                                will be happy to help.
                                            </p>
                                        </div><!-- .service-body end -->
                                    </div><!-- .service-feature-box-end -->
                                </div><!-- .owl-item end -->
                            </div><!-- #services-carousel end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02 simple">
                            <h2>Our Partners</h2>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-container">
                            <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-01.jpg')}}" alt="Diamond-Touch-Zambia"/></div>
                            </div><!-- .owl-carousel.owl-carousel-navigation end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end --

        <!-- #footer-wrapper start -->
        @include('partials.footer')
        <!-- #footer-wrapper end -->


        <script src="{{asset('giant/js/jquery-2.1.4.min.js')}}"></script><!-- jQuery library -->
        <script src="{{asset('giant/js/bootstrap.min.js')}}"></script><!-- .bootstrap script -->
        <script src="{{asset('giant/js/jquery.srcipts.min.js')}}"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="{{asset('giant/owl-carousel/owl.carousel.min.js')}}"></script><!-- Carousels script -->
        <script src="{{asset('giant/masterslider/masterslider.min.js')}}"></script><!-- Master slider main js -->
        <script src="{{asset('giant/js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
        <script src="{{asset('giant/style-switcher/styleSwitcher.js')}}"></script><!-- styleswitcher script -->
        <script src="{{asset('giant/js/include.js')}}"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1920, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    layout: "fullwidth",
                    speed: 50,
                    centerControls: false,
                    loop: true,
                    autoplay: true,
                    parallaxMode: "mouse"
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');
                MSScrollParallax.setup(slider, 50, 80, true);

                $('#services-carousel').owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: false
                        },
                        600: {
                            items: 2,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: false
                        },
                        1000: {
                            items: 3,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: false
                        }
                    }
                });

                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
    </body>
</html>
