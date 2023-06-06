
<!DOCTYPE html>
<html>

<head>

 <title>Oligarchy Logistics - About Us</title>
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
        <link rel="stylesheet" href="{{asset('giant/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}"/><!-- Fontawesome icons css -->
</head>

    <body>
        <!-- #navheader-wrapper start -->
        @include('partials.navheader')
        <!-- #navheader-wrapper start -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Oligarchy Logistics - Global Freight Solutions</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">About</a>
                                </li>

                                <li>

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

                    <aside class="col-md-3 aside aside-left">
                        <ul class="aside-widgets">
                            <li class="widget widget_nav_menu clearfix">
                                <div class="title">
                                    <h3>Oligarchy Logistics Services</h3>
                                </div>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="{{url('/road-transport')}}">Road Transport</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{url('/air-freight')}}">Air Freight</a>
                                    </li>

                                    <li class="menu-item current-menu-item">
                                        <a href="{{ url('/ocean-freight') }}">Ocean Freight</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/customs-clearance') }}">Customs Clearance</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/warehousing') }}">Warehousing</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/value-added') }}">Value Added Servives</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/rail-services') }}">Railway Services</a>
                                    </li>
                                </ul><!-- .menu end -->
                            </li><!-- .widget.widget_nav_menu end -->

                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>Download Our Company Profile</h3>
                                </div>

                                <a href="#" target="_blank" class="download-link">
                                    <span>
                                        <i class="fa fa-file-pdf-o"></i>
                                        Company Profile
                                    </span>
                                </a>
                            </li><!-- .widget.widget-text end -->

                            <!-- .widget.widget-text start -->
                            <li class="widget widget-text">
                                <div class="title">
                                   <h3>contact us</h3>
                                </div>

                                <img src="{{ asset('giant/img/pics/locations.jpg') }}" alt="contact us"/>

                                <br />

                                <p>
                                    Let us know what can we do for you. Contact
                                    us today!
                                </p>

                                <a href="{{ url('/contact') }}" class="read-more">
                                    <span>
                                        Contact us
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </li><!-- .widget-text end -->
                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside.aside-left end -->
                    <div class="col-md-9">
                        <div class="custom-heading">
                            <h2>Oligarchy Logistics</h2>
                        </div>

                        <img class="float-right" src="{{ asset('giant/img/pics/img16.jpg') }}" alt="" width="360"/>

                        <p>
                            Oligarchy Logistics Limited is an independently owned freight forwarding
                            company with its headquarters in Dar es salaam.
                        </p>

                        <br />

                        <div class="row">
                            <div class="col-md-5">
                                <div class="custom-heading">
                                    <h3>Our Mission:</h3>
                                </div><!-- .custom-heading end -->

                                <p>

                                 To ensure our customers are provided with the efficient and highest quality service possible.

                                </p>
                            </div><!-- .col-md-5 end -->

                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h3>our Vision</h3>
                                </div><!-- .custom-heading end -->

                                <p>
                                    To provide our customers with the best freight and transport
                                    solutions for all types of goods in our chosen market.
                                </p>
                            </div><!-- .col-md-7 end -->
                        </div><!-- .row end -->


                    </div><!-- .col-md-9 end -->
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
