
<!DOCTYPE html>
<html>


<head>
        <title>Giant Freight Limited - Road Transport</title>
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
                                                <a href="{{ url('/') }}" data-toggle="dropdown" class="dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/road-transport')}}">Road Transport</a></li>
                                                    <li><a href="#">Air Freight</a></li>
                                                    <li><a href="#">Ocean Freight</a></li>
                                                    <li><a href="#">Customs Clearance</a></li>
                                                    <li><a href="#">Warehousing</a></li>
                                                    <li><a href="#">Value Added Servives</a></li>
                                                    <li><a href="#">Railway Services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


											<li><a href="#">Media</a></li>

											<li><a href="#">Terms & Conditions</a></li>

											<li><a href="#">Contacts</a></li>

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
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="{{ url('/') }}">Services overview</a></li>
                                                        <li>
                                                            <a href="#">Logistics</a>
                                                            <ul class="dl-submenu">
																<li><a href="services02.php">Logistics</a></li>
																<li><a href="overland-transportation.php">Overland transportation</a></li>
																<li><a href="air-freight.php">Air freight</a></li>
																<li><a href="ocean-freight.php">Ocean freight</a></li>
																<li><a href="large-projects.php">Large projects</a></li>
																<li><a href="rail-transportation.php">Rail international shipping</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                    <li><a href="warehousing.php">Warehousing</a></li>
                                                    <li><a href="supply-chain-management.php">Supply chain management</a></li>
                                                    <li><a href="packaging-options.php">Packaging options</a></li>
                                                    <li><a href="consulting-services.php">Consulting services</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>


												<li><a href="media.php">Media</a></li>
												<li><a href="terms-conditions.php">Terms & Conditions</a></li>
												<li><a href="contact-us.php">Contacts</a></li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg04">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Overland Transportation</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="services02.html">Services</a>
                                </li>

                                <li>
                                    <a href="#">Overland transportation</a>
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
                        <img src="img/pics/img27.jpg" alt=""/>

                        <br />

                        <div class="custom-heading">
                            <h2>overland transportation</h2>
                        </div>

                        <p>
                           Full loads, part loads and groupage
Overland freight is an affordable shipping method for transporting your goods domestically throughout Tanzania and across East Africa. Whether your ground transport needs are a single shipment, a few pallets or multiple full loads every week, we value and know how to handle your cargo.

When your shipment requires overnight, high speed or international delivery outside of East Africa, consider using our sea freight or air freight services as transportation alternatives.

Overland transportation throughout Tanzania and East Africa.


                        </p>

                        <br />

                        <br />

                        <h3>Your benefits</h3>

                        <p>
                            Overland transportation is designed to deliver the goods on time across East Africa. With ease you can track your goods during the transportation
							ensuring flexibility and reliability.
                        </p>

                        <br />

                        <img class="float-right" width="360" src="img/pics/img25.jpg" alt=""/>

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

                        <br />
                        <br />

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

     <div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">
                                    <h3>Newsletter subscribe</h3>
                                </div>

                                <p>
                                    Subscribe to our newsletter and we will
                                    inform you about newest projects and promotions.
                                </p>

                                <br />

                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>

                                <br/> <br/>
                                 <img src="img/payment-options.png" alt="Payment Options" style="width:100%; ">


                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>


                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Industry solutions</h3>
                                </div>

                                <ul>
									 <li><a href="warehousing.php">Ware Housing</a></li>
									 <li><a href="supply-chain-management.php">Supply Chain Management</a></li>
									 <li><a href="packaging-options.php">Packaging Options</a></li>
									 <li><a href="consulting-services.php">Consulting Services</a></li>
									 <li><a href="services02.php">Logistics</a></li>
									 <li><a href="overland-transportation.php">Overland Transportation</a></li>
									 <li><a href="ocean-freight.php">Ocean Freight</a></li>
									 <li><a href="large-projects.php">Large Projects</a></li>
									 <li><a href="rail-transportation.php">Rail Transportation</a></li>
                                </ul>

                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
								King Palace House 2nd floor,<br />
								 Mnazi Mmoja Area<br />
								 P.0. Box 68045 <br />
								Dar es salaam - Tanzania
                                </address>

                                <span class="text-big">
                                    +255 712 736 581
                                </span>
                                <br />

                                <a href="mailto:">info@iwefreight.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="https://web.facebook.com/Iwe-Freight-Ltd-705979053122625/?hc_ref=ARSkjwRofd0-nlx-qrVTMdJ6Zz09OVvo8nV1cfyPUzK1xTkXb6Qn0yk4BnOWJRJnJ7M&fref=nf&__xts__%5B0%5D=68.ARBj7FdUsztlEmYc7M7DkxCRxyCR5WJTdcHhbGcKSFaMDEkfKvWz_tBLyqhvGKW9SmGzKZ3zrkbnPKkIuZt0Tn4l8Z1jrEUnqdxkjjly-yb2Owt8AEUCAvz6r4jiic5kx-PG4nBW3srj09Yo8PZ6S8KcKEzaFiQEmpKCAkxJmGn3bK5GsR9RbMfjmCpb00y9E21PMytWt442KZLLyDvJjm6ApzrQLGCTp8ConCrHeaxdakDqRTNm4jlIiE_aI1Tb8sQ8ivSuA15vxst08XARXi9r3UGEipQFjKyRGCQj0UrF8QTFnxhOI2pZW9lxAMp0-ZMEqCNlHvRWYuB_jIRCMzQ&__tn__=kC-R" class="fa fa-facebook"></a></li>
                                    <li><a href="https://www.instagram.com/iwefreightltd/" class="fa fa-instagram"></a></li>
                                    <li><a href="https://twitter.com/LtdIwe" class="fa fa-twitter"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <div class="copyright-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>IWE FREIGHT LTD 2001-2019. All RIGHTS RESERVED.</p>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <p class="align-right">DESIGNED AND DEVELOPED BY ASALI MEDIA</p>
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->
        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="js/include.js"></script><!-- custom js functions -->
    </body>
</html>
