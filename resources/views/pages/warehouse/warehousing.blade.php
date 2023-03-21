
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
                                                    <li><a href="#">Customs Clearance</a></li>
                                                    <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                    <li><a href="#">Value Added Servives</a></li>
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
                                                                <li><a href="#">Customs Clearance</a></li>
                                                                <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                                <li><a href="#">Value Added Servives</a></li>
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
                        <img src="img/pics/warehouse.jpg" alt=""/>
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
                                <img src="img/pics/img01.jpg" alt="Trucking"/>

                                <a href="overland-transportation-2.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>GROUND SHIPPING</h4>
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
                                <img src="img/pics/img02.jpg" alt="Trucking"/>

                                <a href="large-projects-2.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>LARGE PROJECTS</h4>
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
                                <img src="img/pics/img03.jpg" alt="Trucking"/>

                                <a href="air-freight-2.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>INTERNATIONAL AIR FREIGHT</h4>
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
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
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
									 <li><a href="warehousing.html">Ware Housing</a></li>
									 <li><a href="supply-chain-management.html">Supply Chain Management</a></li>
									 <li><a href="packaging-options.html">Packaging Options</a></li>
									 <li><a href="consulting-services.html">Consulting Services</a></li>
									 <li><a href="services02.html">Logistics</a></li>
									 <li><a href="overland-transportation.html">Overland Transportation</a></li>
									 <li><a href="ocean-freight.html">Ocean Freight</a></li>
									 <li><a href="large-projects.html">Large Projects</a></li>
									 <li><a href="rail-transportation.html">Rail Transportation</a></li>
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
                                    <li><a href="https://web.facebook.com/Iwe-Freight-Ltd-705979053122625/?hc_ref=ARSkjwRofd0-nlx-qrVTMdJ6Zz09OVvo8nV1cfyPUzK1xTkXb6Qn0yk4BnOWJRJnJ7M&amp;fref=nf&amp;__xts__%5B0%5D=68.ARBj7FdUsztlEmYc7M7DkxCRxyCR5WJTdcHhbGcKSFaMDEkfKvWz_tBLyqhvGKW9SmGzKZ3zrkbnPKkIuZt0Tn4l8Z1jrEUnqdxkjjly-yb2Owt8AEUCAvz6r4jiic5kx-PG4nBW3srj09Yo8PZ6S8KcKEzaFiQEmpKCAkxJmGn3bK5GsR9RbMfjmCpb00y9E21PMytWt442KZLLyDvJjm6ApzrQLGCTp8ConCrHeaxdakDqRTNm4jlIiE_aI1Tb8sQ8ivSuA15vxst08XARXi9r3UGEipQFjKyRGCQj0UrF8QTFnxhOI2pZW9lxAMp0-ZMEqCNlHvRWYuB_jIRCMzQ&amp;__tn__=kC-R" class="fa fa-facebook"></a></li>
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
