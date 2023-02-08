
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
                                            <a href="index-2.html" style="padding-bottom: 3px; font-size: 13px; color: #2780BA; font-weight: 700;">
                                                 {{--  <img src="{{asset('giant/img/logo.png')}}" alt="Giant Freight"/>  --}}
                                                 Giant Freight Limited
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
											<li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>

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
                   >
                    First class freight services!
                </p>
            </div><!-- slide end -->
        </div><!-- .master-slider end -->

        <div class="page-content parallax parallax01 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action clearfix">
                            <div class="text">
                                <h2>Giant Freight is right for you</h2>
                                <p>
                                    Selecting all services of what Giant Freight can offer.
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
                            Giant Freight Limited
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

                                            <a href="" class="read-more02">
                                                <span>
                                                    Learn More
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
                                            <img src="{{asset('giant/img/pics/img02.jpg')}}" alt="Warehousing"/>

                                            <a href="" class="read-more02">
                                                <span>
                                                    Learn More
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div><!-- .service-media end -->

                                        <div class="service-body">
                                            <div class="custom-heading">
                                                <h4>WAREHOUSING</h4>
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

                                            <a href="" class="read-more02">
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
                                            <img src="{{asset('giant/img/pics/img13.jpg')}}" alt="Customs Clearance"/>

                                            <a href="" class="read-more02">
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
                                                Need custom logistic service? We got
                                                it covered. From overland, air, rail
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
                                            <img src="{{asset('giant/img/pics/img15.jpg')}}" alt="Ocean Freight"/>

                                            <a href="" class="read-more02">
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
                                                Don't know what mean of
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

                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="custom-heading">
                            <h3>company news</h3>
                        </div><!-- .custom-heading end -->

                        <ul class="pi-latest-posts02 clearfix">
                            <li>
                                <div class="post-date">
                                    <p class="day">31</p>
                                    <p class="month">March</p>
                                </div><!-- .post-date end -->

                                <div class="post-details">
                                    <div class="post-category">
                                        <p>
                                            <i class="fa fa-tags"></i>
                                            Reviewer
                                        </p>
                                    </div><!-- .post-category end -->

                                    <a href="news-single.html">
                                        <h4>Thank you for shipment of my daughter</h4>
                                    </a>

                                    <p>
                                        Well I would like to thank Giant Freight to deliver the present
										for my daughter, this helped me to show what type of a father I am
										I will pray that they deliver many presents to true fathers who cares
										about their families.
                                    </p>

                                    <a class="read-more" href="">
                                        <span>

                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div><!-- .post-details end -->
                            </li>

                            <li>
                                <div class="post-date">
                                    <p class="day">22</p>
                                    <p class="month">Dec</p>
                                </div><!-- .post-date end -->

                                <div class="post-details">
                                    <div class="post-category">
                                        <p>
                                            <i class="fa fa-tags"></i>
                                            Reviewer
                                        </p>
                                    </div><!-- .post-category end -->

                                    <a href="news-single.html">
                                        <h4>Such a great service indeed!</h4>
                                    </a>

                                    <p>

									Thank you so much for such a great service
									you have rendered. Everytime the goods arrive
									on time.
                                    </p>

                                    <a class="read-more" href="news-single.html">
                                        <span>

                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div><!-- .post-details end -->
                            </li>
                        </ul><!-- .pi-latest-posts02 end -->
                    </div><!-- .col-md-8 end -->

                    <div class="col-md-4 col-sm-6 clearfix">
                        <div class="custom-heading">
                            <h2>Download our brochure</h2>
                        </div>

                        <img src="{{asset('giant/img/pics/brochure01.jpg')}}" class="float-left" alt=""/>
                        <br />

                        <p>
                            Learn more about us. Download our annual brochure
                            2019.
                        </p>

                        <a class="read-more" href="#">
                            <span>
                                Download our brochure
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </a>
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02 simple">
                            <h2>Our Clients</h2>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-container">
                            <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-01.jpg')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-02.jpg')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-03.jpg')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-04.png')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-05.jpg')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-06.jpg')}}" alt=""/></div>
								<div class="owl-item"><img src="{{asset('giant/img/pics/client-07.jpg')}}" alt=""/></div>
								<div class="owl-item"><img src="{{asset('giant/img/pics/client-08.jpg')}}" alt=""/></div>
								<div class="owl-item"><img src="{{asset('giant/img/pics/client-11.jpg')}}" alt=""/></div>
                            </div><!-- .owl-carousel.owl-carousel-navigation end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-12 end -->
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
                                 <img src="{{asset('giant/img/payment-options.png')}}" alt="Payment Options" style="width:100%; ">


                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
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
									 <li><a href="#">Ware Housing</a></li>
									 <li><a href="#">Supply Chain Management</a></li>
									 <li><a href="#">Packaging Options</a></li>
									 <li><a href="#">Consulting Services</a></li>
									 <li><a href="#">Logistics</a></li>
									 <li><a href="#">Overland Transportation</a></li>
									 <li><a href="#">Ocean Freight</a></li>
									 <li><a href="#">Large Projects</a></li>
									 <li><a href="#">Rail Transportation</a></li>
                                </ul>

                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
								Najmi Manzil Building 4th floor,<br />
								 Clock Tower<br />
								 P.0. Box 68045 <br />
								Dar es salaam - Tanzania
                                </address>

                                <span class="text-big">
                                    +255 624 524 149
                                </span>
                                <br />

                                <a href="mailto:">info@giantfreight.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="#"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
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
                            <p>Giant Freight Limited 2001-2023. All RIGHTS RESERVED.</p>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <p class="align-right">DESIGNED AND DEVELOPED BY Feisal Suleiman Mombo</p>
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->
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
