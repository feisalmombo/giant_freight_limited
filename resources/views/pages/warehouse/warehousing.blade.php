
<!DOCTYPE html>
<html>
<head>

    <title>Oligarchy Logistics - Warehousing</title>
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
                            <h2>WAREHOUSE SOLUTIONS</h2>
                        </div><!-- .custom-heading end -->

                        <p>
                            We have a team of dedicated professionals and core system processes that are customizable. We know there are no two businesses that are alike and the only
                            constant is change. We focus on continuous improvement. We’re flexible and we’re committed to reducing costs while improving service!

                            Our warehouse services are designed to meet the needs of any size business. From startups to large corporations – our services can be scaled to the perfect fit for your operation.
                            <br>
                            We offer dedicated and shared warehouse services and an array of distribution services:
                        </p>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Order processing
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Fulfillment
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                3PL – Transportation services
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Pick and pack
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                Investing in technology to provide fast, acurate and cost-effective serviceMulti-channel distribution
                            </li>
                        </ul><!-- .fa-ul end -->

                        <p>
                            Our success is primarily based on our experience. If you have complex supply chain issues – we’re your answer. We are Oligarchy logistics!
                        </p>
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                        <img src="{{asset('giant/img/pics/warehouse.jpg')}}" alt=""/>
                    </div><!-- .col-md-6 end -->
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
