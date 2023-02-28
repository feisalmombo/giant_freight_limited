
<!DOCTYPE html>
<html>

<head>
        <title>Giant Freight Limited - Air Freight</title>
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
                                                    <li><a href="#">Ocean Freight</a></li>
                                                    <li><a href="#">Customs Clearance</a></li>
                                                    <li><a href="#">Warehousing</a></li>
                                                    <li><a href="#">Value Added Servives</a></li>
                                                    <li><a href="#">Railway Services</a></li>
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
                                                    <a href="{{ url('/') }}">Home</a>

                                                </li>

                                                <li><a href="{{ url('/about') }}">About</a></li>

                                                <li>
                                                    <a href="{{ url('/') }}">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="{{ url('/') }}">Services overview</a></li>
                                                        <li>
                                                            <a href="#">Logistics</a>
                                                            <ul class="dl-submenu">
																<li><a href="#">Logistics</a></li>
																<li><a href="#">Road Transport</a></li>
																<li><a href="#">Air freight</a></li>
																<li><a href="#">Ocean freight</a></li>
																<li><a href="#">Large projects</a></li>
																<li><a href="#">Rail international shipping</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                    <li><a href="#">Warehousing</a></li>
                                                    <li><a href="#">Supply chain management</a></li>
                                                    <li><a href="#">Packaging options</a></li>
                                                    <li><a href="#">Consulting services</a></li>
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
        <div class="page-title-style01 page-title-negative-top pt-bkg05">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Air freight</h1>

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
                                    <a href="{{ url('/air-freight') }}">Air freight</a>
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
                                    <h3>Iwe Freight</h3>
                                </div>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="warehousing.php">Ware Housing</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="supply-chain-management.php">Supply Chain Management</a>
                                    </li>

                                    <li class="menu-item current-menu-item">
                                        <a href="packaging-options.php">Packaging Options</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="consulting-services.php">Consulting Services</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="services02.php">Logistics</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="overland-transportation.php">Overland Transportation</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="ocean-freight.php">Ocean Freight</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="large-projects.php">Large Projects</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="rail-transportation.php">Rail Transportation</a>
                                    </li>
                                </ul><!-- .menu end -->
                            </li><!-- .widget.widget_nav_menu end -->

                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>brochure download</h3>
                                </div>

                                <img src="img/pics/brochure01.jpg" alt="Trucking brochure"/>
                                <br />

                                <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                                    <span>
                                        <i class="fa fa-file-pdf-o"></i>
                                        iwe Freight ltd.pdf
                                    </span>
                                </a>
                            </li><!-- .widget.widget-text end -->

                            <!-- .widget.widget-text start -->
                            <li class="widget widget-text">
                                <div class="title">
                                   <h3>contact us</h3>
                                </div>

                                <img src="img/pics/locations.jpg" alt="contact us"/>

                                <br />

                                <p>
                                    Let us know what can we do for you. Contact
                                    us today!
                                </p>

                                <a href="contact-us.php" class="read-more">
                                    <span>
                                        Contact us
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </li><!-- .widget-text end -->
                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside.aside-left end -->
                    <div class="col-md-9">
                        <img src="img/pics/img28.jpg" alt=""/>

                        <br />

                        <div class="custom-heading">
                            <h2>Air freight</h2>
                        </div>

                        <p>
                           Iwe Freight is one of the largest air freight transportation providers in East Africa.
						   At Iwe Freight we can offer you choice and flexibility when shipping by air whether within East Africa
						   or elsewhere worldwide. We have established relationships with industry partners and will negotiate
						   the best possible rates on your behalf.


                        </p>

                        <br /><br />


                        <div class="row">
                            <div class="col-md-6 clearfix">
                                <h3>Our locations</h3>

                                <img src="img/pics/locations.jpg" alt="locations illustration"/>

                                <br />

                                <p>
                                    Air Freight is an essential component to any logistics network.
									Across our worldwide partners network you can choose the service which best suits your needs.
									Whether your shipments fly in the bellies of commercial planes or require specialist freighter aircraft
									to move them.
                                </p>

                                <a href="locations.html" class="read-more">
                                    <span>

                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .col-md-6 end -->

                            <div class="col-md-6">
                                <h3>Your benefits</h3>

                                <p>
                                     Iwe Freight can look for a tailor-made solutions for all your airfreight.
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
                            </div><!-- .col-md-6 end -->
                        </div><!-- .row end -->

                        <div class="custom-heading">
                            <h3>industries covered</h3>
                        </div><!-- .custom-heading end -->

                        <ul class="service-list-big-icons clearfix">
                            <li>
                                <div class="icon-container">
                                    <img src="img/svg/pi-cargo-retail.svg" alt="retail svg icon"/>
                                </div>

                                <h4>Textile Logistics</h4>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img src="img/svg/pi-food-beverage.svg" alt="food and beverage svg icon"/>
                                </div>

                                <h4>Retail Logistics</h4>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img src="img/svg/pi-mark-energy.svg" alt="retail svg icon"/>
                                </div>

                                <h4>Oil & Gas Logistics</h4>
                            </li>
                        </ul><!-- .service-list-big-icons end -->
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
