
<!DOCTYPE html>
<html>

<head>

 <title>Giant Freight Limited - Welcome Page</title>
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
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Services overview</a></li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Logistics</a></li>
                                                            <li><a href="#">Overland transportation</a></li>
                                                            <li><a href="#">Air freight</a></li>
                                                            <li><a href="#">Ocean freight</a></li>
                                                            <li><a href="#">Large projects</a></li>
                                                            <li><a href="#">Rail international shipping</a></li>

                                                        </ul><!-- .dropdown-menu end -->
                                                    </li><!-- .dropdown-submenu end -->
                                                    <li><a href="#">Warehousing</a></li>
                                                    <li><a href="#">Supply chain management</a></li>
                                                    <li><a href="#">Packaging options</a></li>
                                                    <li><a href="#">Consulting services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


											<li><a href="#">Media</a></li>

											{{--  <li><a href="#">Terms & Conditions</a></li>  --}}

											<li><a href="#">Contacts Us</a></li>

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
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="#">Services overview</a></li>
                                                        <li>
                                                            <a href="#">Logistics</a>
                                                            <ul class="dl-submenu">
																<li><a href="#">Logistics</a></li>
																<li><a href="#">Overland transportation</a></li>
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
												<li><a href="#">Terms & Conditions</a></li>
												<li><a href="#">Contacts</a></li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                    </div><!-- MAIN NAVIGATION END -->

                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header.wrapper.header-transparent end -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Giant Freight - Global Freight Solutions</h1>

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
                                    <h3>Giant Freight</h3>
                                </div>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#">WareHousing</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Supply Chain Management</a>
                                    </li>

                                    <li class="menu-item current-menu-item">
                                        <a href="#">Packaging Options</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Consulting Services</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Logistics</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Overland Transportation</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Ocean Freight</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Large Projects</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">Rail Transportation</a>
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

                                <img src="{{ asset('giant/img/pics/locations.jpg') }}" alt="contact us"/>

                                <br />

                                <p>
                                    Let us know what can we do for you. Contact
                                    us today!
                                </p>

                                <a href="#" class="read-more">
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
                            <h2>Giant Freight Limited</h2>
                        </div>

                        <img class="float-right" src="{{ asset('giant/img/pics/img16.jpg') }}" alt="" width="360"/>

                        <p>
                            We are licensed by the Tanzania Customs service providing
							clearing and forwarding services in Tanzania.

							We are a locally owned and operated company situated right
							in the heart of Dar-Es-Salaam city company is found by
							Filbert Mwendwa. Operating since 1984, we are committed in
							providing the best quality service at competitive rates.
							We pride ourselves in our personalized and responsive services.
							Our dedicated team of professionals ensure timely completion
							of work and professionalism.
                        </p>

                        <br />

                        <div class="row">
                            <div class="col-md-5">
                                <div class="custom-heading">
                                    <h3>Our Mission:</h3>
                                </div><!-- .custom-heading end -->

                                <p>

								To technology leverage, advanced equipment
								and innovative ideas to provide efficient, timely
								and high quality Freight and Logistics services
								to our esteemed clients.

								To be a service provider in the freight and port
								operations with a strong presence in East Africa
								and globally.

                                </p>
                            </div><!-- .col-md-5 end -->

                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h3>our Vision</h3>
                                </div><!-- .custom-heading end -->

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
                            </div><!-- .col-md-7 end -->
                        </div><!-- .row end -->

                        <div class="custom-heading">
                            <h3>the board of directors</h3>
                        </div><!-- .custom-heading end -->

                        <ul class="team-list clearfix">
                            <li>
                                <img src="img/pics/team01.jpg" alt=""/>

                                <div class="team-details-container">
                                    <div class="team-details">
                                        <h5>Filbert Mwendwa</h5>
                                        <p class="position">
                                            Company founder
                                        </p>
                                    </div><!-- .team-details end -->

                                    <p>
                                        Iwe Freight welcomes your business in East Africa
										and would like to help you in providing our experience
										in Clearing & Forwarding, Moving & Expert handling of
										your containers from Seaport/Airport. We are committed
										to building strong relationships with our clients
										and making sure that they are satisfied. We are working with the following
										Government departments:-
                                    </p>

									<img src="media-iwe/supporters.jpg" alt="Partners" />



                                </div><!-- .team-details-container end -->
                            </li><!-- team-member end -->
                        </ul><!-- .team list end -->
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
