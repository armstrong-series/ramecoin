<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ClusterWink</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    @yield('title')
</head>

@yield('styles')
		<style>
			[v-cloak]{
				display: none;
			}
		</style>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="preloader-load"></div>
    </div> -->
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="#"><img class="desktop-logo" src="{{ asset('assets/img/core-img/logo.png') }}" alt="Desktop Logo"> <img class="small-logo" src="{{ asset('assets/img/core-img/small-logo.png') }}" alt="Mobile Logo"></a>
            </div>

            @include('Includes.sidebar')
        </div>
        @yield('content')
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            @include('Includes.header')
            <!-- Main Content Area -->
            <div class="main-content">
                @yield('content')

                <!-- Footer Area -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer class="footer-area d-flex align-items-center flex-wrap">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p>All Right Reserved <a href="#">Clusterwink</a> <?php echo date('Y');?></p>
                                </div>
                                <!-- Footer Nav -->
                                <ul class="footer-nav d-flex align-items-center">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Purchase</a></li>
                                </ul>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <script src="{{ asset('library/axios.min.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <!-- <script src="https://unpkg.com/vue/dist/vue.js"></script> -->
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Must needed plugins to the run this Template -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/setting.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/fullscreen.js') }}"></script>

    

    <!-- Active JS -->
    <script src="{{ asset('assets/js/default-assets/active.js') }}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{ asset('assets/js/default-assets/ammap.min.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/radar.js') }}"></script>
    <script src="js/default-assets/widget-page-chart-active.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/apexchart.min.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/dashboard-active.js') }}"></script>
    @yield('scripts')

</body>
</html>