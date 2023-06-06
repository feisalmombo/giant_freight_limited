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
                                         Oligarchy Logistics
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
                                            <li><a href="{{ url('/customs-clearance') }}">Customs Clearance</a></li>
                                            <li><a href="{{ url('/warehousing') }}">Warehousing</a></li>
                                            <li><a href="{{ url('/value-added') }}">Value Added Servives</a></li>
                                            <li><a href="{{ url('/rail-services') }}">Railway Services</a></li>
                                        </ul><!-- .dropdown-menu end -->
                                    </li><!-- .dropdown end -->

                                    <li><a href="{{ url('/contact') }}">Contacts Us</a></li>

                                </ul><!-- .nav.navbar-nav end -->

                                <!-- RESPONSIVE MENU -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>

                                    <ul class="dl-menu">
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>

                                        </li>

                                        <li><a href="{{url('/about')}}">About</a></li>

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
