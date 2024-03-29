
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
        <!-- #navheader-wrapper start -->
        @include('partials.navheader')
        <!-- #navheader-wrapper start -->

        <!-- .master-slider start -->
        <div id="masterslider" class="master-slider ms-skin-default mb-0">

            <!-- slide start -->
            <div class="ms-slide">
                <img src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-05.jpg')}}" alt=""/>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 390px; top: 340px;"
                    data-type="text"
                    data-delay="100"
                    data-parallax="10"
                    >
                    Oligarchy Logistics
                </h2>

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
                   style="left: 395px; top: 520px; color: #000; font-weight:bold"
                   data-type="text"
                   data-delay="100"
                   data-parallax="10"
                   />
                   Oligarchy Logistics Limited is an independently <br><br>
                   owned freight forwarding company with its headquarters in Dar es salaam.
                </p>
            </div><!-- slide end -->

            <!-- slide start -->
            {{--  <div class="ms-slide">
                <img src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-01.jpg')}}" alt=""/>

                <img class="ms-layer" src="{{asset('giant/masterslider/blank.gif')}}" data-src="{{asset('giant/img/slider/slide05-03.png')}}" alt=""
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
            </div>  --}}
            <!-- slide end -->
        </div><!-- .master-slider end -->

        <div class="page-content parallax parallax01 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action clearfix">
                            <div class="text">
                                <h2>Oligarchy Logistics is the best choice</h2>
                                <p>
                                    Because, Oligarchy Logistics can offer a good service depending for
                                    their customers needs.
                                    We make sure to keep up with today
									standards to serve and expand and satisfy all our
									clients globally with integrity, professionalism and
									reliability.
                                </p>
                            </div><!-- .text end -->

                            <a href="{{ url('/') }}" class="btn btn-big">
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
                        <h2>Our Services</h2>
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
                                                We offer second to none transportation services to our clients across Eastern, Central and
                                                Southern Africa. We guarantee reliability and best transit times to all our destinations
                                                within the region. As our client, you will be provided with daily updates of movement of
                                                your goods until they reach final destination..........
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
                                                Our strong partnership with Shipping Lines, enables us to offer our
                                                clients competitive rates to and fro overseas destination. We pride ourselves to connecting Eastern,
                                                Central and Southern Africa to the rest of the
                                                world by offering customized freight forwarding solutions that suits our clients needs.
                                                With offices located in strategic Port cities ......
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
                                                Our Depht of experience in the air freight industry gives Motionstarlight a unique position to negotiate the best possible rate on the behalf of our Customers. You can take advantage of our special spot rates and discounts for the following services to various destinations across the globe
                                                1. Airport to Airport service:
                                                2. Door to Door service:
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
                                                We have a team of dedicated professionals and core system processes that are customizable. We know there are no two businesses that are alike and the only constant is change. We focus on continuous improvement. We’re flexible and we’re committed to reducing costs while improving service!

                                                Our warehouse services......
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
                                                If you need to move goods quickly or within a very specific time frame, value added services are the best option. Value Added services are guaranteed, urgent services and come with different unique options.

                                                This makes them ideal for the kind of shipments that require special handling and care........
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
                                                With Offices located in strategic Port City (Dar es Salaam) Surported by Satellite offices at border points and cities of Kigari, Bunjubura, Lusaka, Harare, Lubumbashi

                                                Don not know what mean of
                                                transportation would be right for
                                                you, or you need someone for full
                                                supply chain management?....
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
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-02.png')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-03.png')}}" alt=""/></div>
                                <div class="owl-item"><img src="{{asset('giant/img/pics/client-04.png')}}" alt=""/></div>
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
