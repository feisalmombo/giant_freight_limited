
<!DOCTYPE html>
<html>
<head>

    <title>Giant Freight Limited - Warehousing</title>
    <meta name="description" content="Giant Freight">
    <meta name="author" content="Giant Freight">
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
    <link rel="stylesheet" href="{{asset('giant/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}"/><!-- Fontawesome icons css -->
</head>

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
                                               Giant Freight Limited
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


											<li><a href="#">Media</a></li>

											<li><a href="{{ url('/contact') }}">Contacts Us</a></li>

                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="#">Home</a>

                                                </li>

                                                <li><a href="#">About</a></li>

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

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg11">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Warehousing</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">Our Services</a>
                                </li>

                                <li>
                                    <a href="{{ url('/warehousing') }}">Warehousing</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->


        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h2>INTELLIGENT WAREHOUSE SOLUTIONS</h2>
                        </div><!-- .custom-heading end -->

                        <p>
                            Our warehousing and storage solutions are ideal for goods either in transit, bond or simply stored. We can store your goods for you awaiting export or delivery until you are ready to proceed. We take pride in catering to a broad range of clientele throughout Tanzania with our warehousing service, which is comprehensive, reliable and flexible – qualities that are essential to help businesses in this market.


                        </p>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Providing high quality transportation services to all of our clients
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Invest in our employees to provide better service and company growth
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Worry about enviroment according to latest industry standards
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Safety as top priority in assuring safe work procedures
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Investing in technology to provide fast, acurate and cost-effective service
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Living up to highest industry standards
                            </li>
                        </ul><!-- .fa-ul end -->

                        <p>
                           Consult with our experts today for your logistics, warehousing and distribution services requirements, and allow us to make a positive difference in your business
                        </p>
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                        <img src="{{asset('giant/img/pics/warehouse.jpg')}}" alt=""/>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content parallax parallax04 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02 simple">
                            <h2>Secure Storage</h2>
                        </div><!-- .custom-heading02 end -->

                        <div class="statement">
                            <p>
                                As a contractor we promise to take care of all
                                supply chain management, to make your shipments
                                travel safe, fast and on time.
                            </p>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Other services</h2>
                            <p>tailored logistics services</p>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="{{asset('giant/img/pics/img01.jpg')}}" alt="Road Transport"/>

                                <a href="{{ url('/road-transport') }}" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>ROAD TRANSPORT</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We have a wide experience in overland
                                    industry specific logistic solutions like
                                    pharmaceutical logistics, retail and
                                    automotive logistics by train or road.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="{{asset('giant/img/pics/img02.jpg')}}" alt="Oceab Freight"/>

                                <a href="{{ url('/ocean-freight') }}" class="read-more02">
                                    <span>
                                        Read more
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
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
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
                                    sea freight. You can also combine this
                                    package with other means of transportation.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- #footer-wrapper start -->
        @include('partials.footer')
        <!-- #footer-wrapper end -->

        <script src="{{asset('giant/js/jquery-2.1.4.min.js')}}"></script><!-- jQuery library -->
        <script src="{{asset('giant/js/bootstrap.min.js')}}"></script><!-- .bootstrap script -->
        <script src="{{asset('giant/js/jquery.srcipts.min.js')}}"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="{{asset('giant/js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
        <script src="{{asset('giant/style-switcher/styleSwitcher.js')}}"></script><!-- styleswitcher script -->
        <script src="{{asset('giant/js/include.js')}}"></script><!-- custom js functions -->
    </body>
</html>
