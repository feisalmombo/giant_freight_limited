
<!DOCTYPE html>
<html>


<head>
        <title>Giant Freight Limited - Value Added Services</title>
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
                                                    <li><a href="{{url('/air-freight')}}">Air Freight</a></li>
                                                    <li><a href="{{ url('/ocean-freight') }}">Ocean Freight</a></li>
                                                    <li><a href="{{ url('/customs-clearance') }}">Customs Clearance</a></li>
                                                    <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                                    <li><a href="{{ url('/value-added') }}">Value Added Servives</a></li>
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
                                                                <li><a href="{{ url('/value-added') }}">Value Added Servives</a></li>
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
        <div class="page-title-style01 page-title-negative-top pt-bkg10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Value Added Service</h1>

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
                                    <a href="{{ url('/value-added') }}">Value Added Service</a>
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
                        <img src="{{asset('giant/img/pics/img35.jpg')}}" alt=""/>

                        <br />

                        <div class="custom-heading">
                            <h2>secure packaging</h2>
                        </div><!-- .custom-heading end -->



                        <br />

                        <div class="custom-heading">
                            <h3>Moving</h3>
                        </div><!-- .custom-heading end -->

                         <p>
                           Moving services for organizations are increasingly complicated and cumbersome to handle. To assist you we offer this service and will do everything for you including packing, labeling, installations of office equipment, transportation, etc. it becomes our problem when you move!
                        </p>

                        {{--  <br />

                        <img src="{{asset('giant/img/pics/packaging.jpg')}}" alt=""/>

                        <br /><br />  --}}

                        {{--  <div class="table-responsive">
                            <table class="table">
                                <caption>packaging options table</caption>

                                <thead>
                                    <tr>
                                        <th>package size</th>
                                        <th>small</th>
                                        <th>medium</th>
                                        <th>large</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Package dimensions</td>
                                        <td>120 x 150 x 178</td>
                                        <td>120 x 150 x 178</td>
                                        <td>120 x 150 x 178</td>
                                    </tr>

                                    <tr>
                                        <td>Weight</td>
                                        <td>35 kg</td>
                                        <td>45kg</td>
                                        <td>65kg</td>
                                    </tr>

                                    <tr>
                                        <td>Capacity</td>
                                        <td>approx 158 units of textile</td>
                                        <td>approx 258 units of textile</td>
                                        <td>approx 258 units of textile</td>
                                    </tr>
                                </tbody>
                            </table><!-- .table end -->
                        </div><!-- .table-responsive end -->  --}}
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
