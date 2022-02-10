
<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Ramecoin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="NFT Marketplace & Cryptocurrency Trade and Investment" />
        <meta name="keywords" content="Bitcoin, Cryptocurrency, Crypto, BTC, Cryptocoin, Buy Crypto, Sell Crypto" />
        <meta content="Shreethemes" name="author" />
        <meta content="support@shreethemes.in" name="Email" />
        <meta content="https://shreethemes.in/" name="Website" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <!-- Main css -->
        <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('frontend/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

    </head>

	@yield('title')

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- TAGLINE START-->
        <div class="tagline bg-light shadow">
            <div class="container-fluid">                
                <div class="row">
                    <div class="col-12">
                        <div class="text-slider">
                            <ul class="list-inline mb-0 move-text">
                                <li class="list-inline-item small px-2 mb-0">EOG $ 55.88 <span class="text-success">+$ 4.62 ( +9.01% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">CHKP $ 120.03 <span class="text-danger">-$ 14.07 ( -10.49% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">FANG $ 63.58 <span class="text-success">+$ 5.17 ( +8.84% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">M $ 14.75 <span class="text-success">+$ 1.05 ( +7.66% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">PKI $ 139.72 <span class="text-danger">-$ 11.41 ( -7.55% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">ABMD $ 326.23 <span class="text-danger">-$ 21.61 ( -6.21% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">BITCOIN $ 37,471.47 <span class="text-danger">+$ 492.60 ( +1.33% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">XRP <span> $ 0.39</span><span class="text-muted"> UNCH</span></li>
                                <li class="list-inline-item small px-2 mb-0">LITECOIN <span> $ 148.67</span><span class="text-danger">-$ 5.58 ( -3.62% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">BITCOIN CASH <span> $ 427.37</span><span class="text-danger">-$ 15.98 ( -3.60% )</span></li>
                                <li class="list-inline-item small px-2 mb-0">ETHEREUM $ 1,647.87 <span class="text-danger">+$ 14.51 ( +0.89% )</span></li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end tagline-->
        <!-- TAGLINE END-->

        <!-- Navbar STart -->
		@include('Frontend.Includes.navbar')
        <!--end header-->
        <!-- Navbar End -->
        @yield('content')
   
        @include('Frontend.Includes.footer')
        <!-- Offcanvas End -->
        
        

		<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" 
  		crossorigin="anonymous"></script>
        
        <!-- javascript -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('frontend/js/areachart.init.js') }}"></script>
        <script src="{{ asset('frontend/js/feather.min.js') }}"></script>
        <!-- Switcher -->
        <script src="{{ asset('frontend/js/switcher.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('frontend/js/plugins.init.js') }}"></script>
        <script src="{{ asset('frontend/js/app.js') }}"></script>

		@yield('scripts')
        
    </body>

</html>