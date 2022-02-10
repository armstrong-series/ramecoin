<header id="topnav" class="defaultscroll sticky tagline-height">
            <div class="container">
                <!-- Logo Start-->
                <a class="logo" href="#">
                    <span class="logo-light-mode">
                        <img src="{{ asset('frontend/images/logo-dark.png') }}" class="l-dark" height="28" alt="">
                        <img src="{{ asset('frontend/images/logo-light.png') }}" class="l-light" height="28" alt="">
                    </span>
                    <img src="{{ asset('frontend/images/logo-light.png') }}" height="28" class="logo-dark-mode" alt="">
                </a>
                <!-- Logo end-->
                
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item search-icon mb-0">
                        <a href="{{ route('login') }}" >
                            <div class="btn btn-icon btn-pills btn-primary"><i class="uil uil-user"></i></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-right nav-light">
                        <li><a href="{{ route('frontend.home') }}" class="sub-menu-item">Home</a></li>
                        <li><a href="{{ route('frontend.about') }}" class="sub-menu-item">About</a></li>
                        <li><a href="#" class="sub-menu-item">Pricing</a></li>
                        <li><a href="#" class="sub-menu-item">FAQ</a></li>
                        <li><a href="#" class="sub-menu-item"> Inquiry</a></li>

                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header>