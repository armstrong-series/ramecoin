<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
  integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous"/>
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
      @include('Includes.sidebar')


	  @yield('content')
		
    </div>

 

    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
     integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" 
     crossorigin="anonymous"></script>

    <script src="{{ asset('library/axios.min.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
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
    <script src="{{ asset('assets/js/default-assets/widget-page-chart-active.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/apexchart.min.js') }}"></script>
    <script src="{{ asset('assets/js/default-assets/dashboard-active.js') }}"></script>
    @yield('scripts')

</body>
</html>