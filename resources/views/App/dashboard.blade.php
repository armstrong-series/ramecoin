@extends('Layout.master')
@section('title')
<title>Ramecoin</title>
@endsection

@section('content')
        <!-- Page Content -->
    <div class="container-fluid">
        <!-- Widgets Data -->

        <div class="row">
            <div class="col-12 box-margin" id="dashboard">
                <div class="card">
                    <div class="card-body">
                        <h5 class="">Welcome {{ $user->name }} !</h5>
                       <p class="mb-0 text-muted">Ramecoin Investment</p>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-xl-3 mb-30">
                <div class="card widget-slider-area p-20">
                    <div class="widget-slides owl-carousel">
                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">

                                <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">$ {{ $balance }}</h6>
                            <p class="mb-0">Account Balance</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-30">
                <div class="card widget-slider-area p-20">
                    <div class="widget-slides owl-carousel">
                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">

                            <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">$ {{ $balance }}</h6>
                            <p class="mb-0">Total Investment</p>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-30">
                <div class="card widget-slider-area p-20">
                    <div class="widget-slides owl-carousel">
                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Cost</h6>
                                <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">$79,639.69</h6>
                            <p class="mb-0">Total Investment</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 mb-30">
                <div class="card widget-slider-area p-20">
                    <div class="widget-slides owl-carousel">
                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Cost</h6>
                                <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">$79,639.69</h6>
                            <p class="mb-0">Total Investment</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

     @include('Includes.btc-trading-chart')
    </div>
@endsection

@section('script')
<script src="https://s3.tradingview.com/tv.js"></script>
<script>


  new TradingView.widget(
  {
  "width": "100%",
  "height": "550",
  "symbol": "COINBASE:BTCUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": 'dark',
  "style": "9",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "calendar": false,
  "studies": [
    "BB@tv-basicstudies"
  ],
  "container_id": "tradingview_f933e"
}
  );

</script>
@endsection
