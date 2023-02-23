
<!DOCTYPE html>
<html>
<head>

    <title>Giant Freight Limited - Contact Us</title>
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
											<li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>

											<li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="services01.php">Services overview</a></li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="services02.php">Logistics</a></li>
                                                            <li><a href="overland-transportation.php">Overland transportation</a></li>
                                                            <li><a href="air-freight.php">Air freight</a></li>
                                                            <li><a href="ocean-freight.php">Ocean freight</a></li>
                                                            <li><a href="large-projects.php">Large projects</a></li>
                                                            <li><a href="rail-transportation.php">Rail international shipping</a></li>

                                                        </ul><!-- .dropdown-menu end -->
                                                    </li><!-- .dropdown-submenu end -->
                                                    <li><a href="warehousing.php">Warehousing</a></li>
                                                    <li><a href="supply-chain-management.php">Supply chain management</a></li>
                                                    <li><a href="packaging-options.php">Packaging options</a></li>
                                                    <li><a href="consulting-services.php">Consulting services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->


											<li><a href="media.php">Media</a></li>

											<li><a href="terms-conditions.php">Terms & Conditions</a></li>

											<li><a href="contact-us.php">Contacts</a></li>

                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="index.php">Home</a>

                                                </li>

                                                <li><a href="about-php">About</a></li>

                                                <li>
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="services01.php">Services overview</a></li>
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
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact us</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Contact simple</a>
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
                            <h3>Contact Us</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            We are a locally owned and operated company situated right in the heart of Dar-Es-Salaam city. Our location is arround mnazi mmoja area very close to Dar es salaam ferry. We are committed in providing the best quality service at competitive rates. We pride ourselves in our personalized and responsive services. Our dedicated team of professionals ensure timely completion of work and professionalism.
<br/><br/>
Call us today by calling us at +255 712736581, +255 685908198 or fill out the online contact form.
<br/>
Iwe Freight Ltd, P. O. Box 68045, Email: info@iwefreight.com
                        </p>

                        <br />

                        <!-- .contact form start -->
                        <form  action="https://www.iwefreight.com/form-sender-iwe.php" method="post">


                            <fieldset>
                                <label>
                                    <span class="required">*</span> Your request:
                                </label>

                                <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                    <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                    <option value="I need an offer for air freight">I need an offer for air freight</option>
                                    <option value="I want to become your partner">I want to become your partner</option>
                                    <option value="I have some other request">I have some other request</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> First Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Last Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-last-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input  class="wpcf7-text" id="contact-email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Message:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form><!-- form-end end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>Iwe Freight headquarters</h3>
                        </div><!-- .custom-heading end -->

                        <div >

						<figure><iframe src="https://www.google.com/maps/d/embed?mid=1Y_ZayGZCO1nBW0eefSiHBtGDvsjpfvWp" width="640" height="480"></iframe></figure>
						</div>

                        <div class="custom-heading">
                            <h4>Contact information</h4>
                        </div><!-- .custom-heading end -->

                        <address>
                            King Palace House 2nd floor, Mnazi Mmoja Area<br />
							P.0. Box 68045 <br />
							Dar es salaam - Tanzania <br />
                        </address>

                        <span class="text-big colored">


                            <a href=""><img src="img/pics/ws-lnk.png" alt="" style="display: inline; width: 30px; margin-top: 5px;"> +255 712 736 581 </a>

                            <a href=""><img src="img/pics/cell2.jpg" alt="" style="display: inline; width: 15px; margin-top: 5px;"> +255 685 908 198</a>
                        </span>
                        <br />

                        <a href="mailto:">info@iwefreight.com</a>
                    </div><!-- .col-md-6 end -->
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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> <!-- google maps -->
        <script src="js/jquery.ui.map.full.min.js"></script><!-- google maps -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->

        <script src="js/include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var nottingham = new google.maps.LatLng(52.934658, -1.131450);

                    var style = [
                        {"featureType": "road",
                            "elementType":
                                    "labels.icon",
                            "stylers": [
                                {"saturation": 1},
                                {"gamma": 1},
                                {"visibility": "on"},
                                {"hue": "#e6ff00"}
                            ]
                        },
                        {"elementType": "geometry", "stylers": [
                                {"saturation": -85}
                            ]
                        }
                    ];

                    var mapOptions = {
                        // SET THE CENTER
                        center: nottingham,
                        // SET THE MAP STYLE & ZOOM LEVEL
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: 9,
                        // SET THE BACKGROUND COLOUR
                        backgroundColor: "#eeeeee",
                        // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                        panControl: true,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: true,
                        overviewMapControl: true,
                        scrollwheel: false,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        }

                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    // SET THE MAP TYPE
                    var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');

                    //CREATE A CUSTOM PIN ICON
                    var marker_image = 'img/pin.png';
                    var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                    marker = new google.maps.Marker({
                        position: nottingham,
                        map: map,
                        icon: pinIcon,
                        title: ''
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);



            });
            /* ]]> */
        </script>
    </body>


</html>
