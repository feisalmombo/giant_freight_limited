
<!DOCTYPE html>
<html>
<head>

    <title>Giant Freight Limited - Customs Clearance</title>
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
                                            <li><a href="{{ url('/about') }}">About</a></li>

											<li class="dropdown">
                                                <a href="{{ url('/') }}" data-toggle="dropdown" class="dropdown-toggle">Our Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/road-transport')}}">Road Transport</a></li>
                                                    <li><a href="{{ url('/air-freight') }}">Air Freight</a></li>
                                                    <li><a href="{{ url('/ocean-freight') }}">Ocean Freight</a></li>
                                                    <li><a href="{{ url('/customs-clearance') }}">Customs Clearance</a></li>
                                                    <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                    <li><a href="#">Value Added Servives</a></li>
                                                    <li><a href="{{ url('/rail-services') }}">Railway Services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


											<li><a href="#">Media</a></li>

											{{--  <li><a href="#">Terms & Conditions</a></li>  --}}

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
                                                                <li><a href="#">Value Added Servives</a></li>
                                                                <li><a href="{{ url('/rail-services') }}">Railway Services</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>


												<li><a href="#">Media</a></li>
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
        <div class="page-title-style01 page-title-negative-top pt-bkg13">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Customs Clearance</h1>

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
                                    <a href="{{ url('/customs-clearance') }}">Customs Clearance</a>
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
                                    <h3>Giant Freight Services</h3>
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
                                        <a href="#">Customs Clearance</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/warehousing') }}">Warehousing</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Value Added Servives</a>
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

                                <a href="{{ asset('giant/profile/giant-freight-limited.pdf') }}" target="_blank" class="download-link">
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

                                <img src="{{asset('giant/img/pics/locations.jpg')}}" alt="contact us"/>

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
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{asset('giant/img/pics/img40.jpg')}}" alt="Consulting Services"/>
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h2>consulting services</h2>
                                </div>

                                <p>
                                   Consulting is built into our Soul. We approach every customer, whether a direct transportation account or a strictly consulting client, with the same focus on finding solutions that work best for their unique business.


                                </p>

                                <p>
                                   Since 2000, we’ve helped small startups and large multinational organizations alike optimize their logistics processes.  Our goal is to help you build a successful and sustainable supply chain.
                                </p>
                            </div><!-- .col-md-5 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-5">
                                <h3>Efficient supply chain</h3>

                                <p>
                                   Our company has through years of experience in this industry, been able to create a network of associates throughout East Africa and around the world, which helps us to provide safe, reliable, economical and customized logistic solutions to our clients. Our logistics team has years of experience in this business and can handle long and short term and large or small scale assignments with utter professionalism.
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
                                </ul><!-- .fa-ul end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-7 custom-bkg bkg-light-blue">
                                <div class="custom-heading">
                                    <h3>Giant Freight</h3>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We are an authorized, insured and licensed logistics service provider, who has over the years not only gained a credible market reputation, but has also been able to win the hearts of hundreds of our clients, both national and international. We aim to provide a mutually benefitting logistics service to our clients, which is what has helped us become one of the most reliable logistic service providers in the nation.
                                </p>

                                <ul class="fa-ul">
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Higher quality service by optimizing transport
                                        routes, means of transportation and reducing costs
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Strong optimized supply chain infrastructure
                                        that will make a competitive advantage to your business
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Synchronized demand and supply which will enable
                                        easier and more accurate predictions of your
                                        clients needs
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Effective quality measurement and monitoring
                                        will enable you to reduce costs and optimize your business.
                                    </li>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .col-md-6 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-heading">
                                    <h3>other services</h3>
                                </div><!-- .custom-heading end -->
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
                                            <h4>ROAD FREIGHT</h4>
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
                                        <img src="{{asset('giant/img/pics/img02.jpg')}}" alt="Ocean Freight"/>

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
