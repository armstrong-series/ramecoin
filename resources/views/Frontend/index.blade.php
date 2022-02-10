@extends('Frontend.Layout.master')
@section('title')
    <title>Renewal</title>
@endsection

	@section('content')
       <!-- Hero Start -->
       <section class="bg-home bg-black d-flex align-items-center" style="background-image: url('{{ asset("frontend/images/bg/bg02.png") }}') !important; background-position: center !important;">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="title-heading">
                            
                            <h4 class="display-5 text-white title-dark fw-medium mt-3 mb-4">Easiest Way to Trade and Investment</h4>
                            <p class="text-white-50 para-desc mx-auto mb-0">With  over 2 million customers achieve their financial goals by helping them trade and invest with ease</p>
                            
                            <div class="mt-4 pt-2">
                                <!-- <a href="javascript:void(0)" class="btn btn-primary m-1"><i class="uil uil-apple"></i> App Store</a> -->
                                <a href="{{ route('login')}}" class="btn btn-outline-primary m-1">Start Now</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                        <div class="card border-0 bg-light shadow rounded p-4 overflow-hidden">
                            <img src="{{ asset('frontend/images/illustration/profit.svg') }}" class="img-fluid" alt="">

                            <div class="mt-4 pt-2">
                                <h5 class="text-center mb-0">Live Cryptocurrency Calculator</h5>

                                <div class="calculator-block mt-4">  
                                    <div class="calculator-body">  
                                        <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-end mb-4 pb-2">   
                <div class="col-md-4  pt-2 mt-sm-0 pt-sm-0 order-2 order-md-1">
                        <div class="card border-0 shadow rounded p-4 bg-light overflow-hidden">
                            <!-- <img src="{{ asset('frontend/images/icon-gradient.png') }}" class="avatar avatar-md-md d-block mx-auto" alt=""> -->
                            <h5 class="text-center mt-3">Starter</h5>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="token-sale">
                                        <ul class="count-down list-unstyled m-0">
                                            <li id="days" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="hours" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="mins" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="secs" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <!-- <li id="end" class="h1"></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-dark fw-medium text-center">$500</h3>
                        
                            <div class="progress-box mt-4">
                                <div class="progress rounded-md" style="height:16px;">
                                    <div class="progress-bar position-relative bg-gradient-primary rounded-md" style="width:60%;">
                                        <div class="progress-value d-block text-muted h6">One Week</div>
                                    </div>
                                </div>
                               
                            </div><!--end process box-->

                            <ul class="list-unstyled mb-0 mt-4">
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Min. Possible Deposit:</span> $200</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Max. Possible Deposit:</span> $1000</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$60 Minimum Return</span></li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$70 Maximum Return</span></li>
                            </ul>

                            <div class="mt-4">
                                <a href="{{ route('login')}}" class="btn btn-primary w-100">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4  pt-2 mt-sm-0 pt-sm-0 order-2 order-md-1">
                        <div class="card border-0 shadow rounded p-4 bg-light overflow-hidden">
                            <!-- <img src="{{ asset('frontend/images/icon-gradient.png') }}" class="avatar avatar-md-md d-block mx-auto" alt=""> -->
                            <h5 class="text-center mt-3">Standard</h5>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="token-sale">
                                        <ul class="count-down list-unstyled m-0">
                                            <li id="days" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="hours" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="mins" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="secs" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="text-dark fw-medium text-center">$1000</h3>
                            <div class="progress-box mt-4">
                                <div class="progress rounded-md" style="height: 16px;">
                                    <div class="progress-bar position-relative bg-gradient-primary rounded-md" style="width:60%;">
                                        <div class="progress-value d-block text-muted h6">One week </div>
                                    </div>
                                </div>
                               
                            </div>

                            <ul class="list-unstyled mb-0 mt-4">
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Min. Possible Deposit:</span> $200</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Max. Possible Deposit:</span> $2000</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$60 Minimum Return</span></li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$80 Maximum Return</span></li>
                            </ul>

                            <div class="mt-4">
                                <a href="{{ route('login')}}" class="btn btn-primary w-100">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->

                    <div class="col-md-4  pt-2 mt-sm-0 pt-sm-0 order-2 order-md-1">
                        <div class="card border-0 shadow rounded p-4 bg-light overflow-hidden">
                            <!-- <img src="{{ asset('frontend/images/icon-gradient.png') }}" class="avatar avatar-md-md d-block mx-auto" alt=""> -->
                            <h5 class="text-center mt-3">Premium</h5>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="token-sale">
                                        <ul class="count-down list-unstyled m-0">
                                            <li id="days" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="hours" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="mins" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            <li id="secs" class="count-number fw-medium mb-0 list-inline-item px-3"></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="text-dark fw-medium text-center">$5000</h3>
                      

                            <div class="progress-box mt-4">
                                <div class="progress rounded-md" style="height: 16px;">
                                    <div class="progress-bar position-relative bg-gradient-primary rounded-md" style="width:60%;">
                                        <div class="progress-value d-block text-muted h6">One Week </div>
                                    </div>
                                </div>
                                
                            </div><!--end process box-->

                            
                            <ul class="list-unstyled mb-0 mt-4">
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Min. Possible Deposit:</span> $5000</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">Max. Possible Deposit:</span> $10000</li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$100 Minimum Return</span></li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$200 Maximum Return</span></li>
                                <li class="h6 mb-0"><i class="uil uil-arrow-circle-right text-primary align-middle fs-5 me-1"></i><span class="text-muted">$1000 Gift Bonus</span></li>
                            </ul>

                            <div class="mt-4">
                                <a href="{{ route('login')}}" class="btn btn-primary w-100">Join Now</a>
                            </div>
                        </div>
                    </div>
                 </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 p-4 rounded shadow position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <img src="{{ asset('frontend/images/coin/bitcoin.png') }}" class="avatar avatar-coin rounded-pill p-1 bg-success" alt="">
                                <span class="text-muted fw-medium">BTC</span>
                            </div>

                            <h6>Bitcoin</h6>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <small class="text-success">+15.55%</small>
                                <small class="text-success">+$ 155</small>
                                <small>$ 41245</small>
                            </div>

                            <div class="crypto-chart">
                                <div>
                                    <div id="chart-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 p-4 rounded shadow position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <img src="{{ asset('frontend/images/coin/ethereum.png') }}" class="avatar avatar-coin rounded-pill p-1 bg-danger" alt="" >
                                <span class="text-muted fw-medium">ETS</span>
                            </div>

                            <h6>Ethereum</h6>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <small class="text-danger">-25.01%</small>
                                <small class="text-danger">-$ 524</small>
                                <small>$ 1458</small>
                            </div>

                            <div class="crypto-chart">
                                <div>
                                    <div id="chart-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 p-4 rounded shadow position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <img src="{{ asset('frontend/images/coin/monero.png') }}" class="avatar avatar-coin rounded-pill p-1 bg-success" alt="">
                                <span class="text-muted fw-medium">XMR</span>
                            </div>

                            <h6>Monero</h6>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <small class="text-success">+3.08%</small>
                                <small class="text-success">+$ 58</small>
                                <small>$ 448</small>
                            </div>

                            <div class="crypto-chart">
                                <div>
                                    <div id="chart-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 p-4 rounded shadow position-relative">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <img src="{{ asset('frontend/images/coin/litecoin.png') }}" class="avatar avatar-coin rounded-pill p-1 bg-danger" alt="">
                                <span class="text-muted fw-medium">LTC</span>
                            </div>

                            <h6>Litecoin</h6>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <small class="text-danger">-5.05%</small>
                                <small class="text-danger">-$ 48</small>
                                <small>$ 478</small>
                            </div>

                            <div class="crypto-chart">
                                <div>
                                    <div id="chart-4"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-12 d-block d-md-none">
                        <div class="text-center mt-4">
                            <a href="#" class="text-primary">See Marketplace <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature feature-primary feature-clean text-center rounded p-4">
                            <div class="icons text-center">
                                <i class="uil uil-shield-check d-block mx-auto rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-4">
                                <a href="#" class="text-dark h5 title">Secure storage</a>
                                <p class="text-muted mt-3 mb-0">We store the vast majority of the digital assets in secure offline storage.</p>
                                <div class="mt-2">
                                    <a href="#" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="feature feature-primary feature-clean text-center rounded p-4">
                            <div class="icons text-center">
                                <i class="uil uil-newspaper d-block mx-auto rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-4">
                                <a href="features.html" class="text-dark h5 title">Protected by insurance</a>
                                <p class="text-muted mt-3 mb-0">Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                                <div class="mt-2">
                                    <a href="#" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="feature feature-primary feature-clean text-center rounded p-4">
                            <div class="icons text-center">
                                <i class="uil uil-browser d-block mx-auto rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-4">
                                <a href="#" class="text-dark h5 title">Industry best practices</a>
                                <p class="text-muted mt-3 mb-0">Cryptor supports a variety of the most popular digital currencies.</p>
                                <div class="mt-2">
                                    <a href="#" class="link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            
            <div class="container mt-100 mt-60">
                <div class="row align-items-lg-center align-items-end">
                    <div class="col-md-6">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Free your money and <br> invest with confidence</h4>
                            <p class="text-muted para-desc mb-0">With Cryptor Trade, you can be sure your trading skills are matched with excellent service.</p>

                            <ul class="list-unstyled mb-0">
                                <li class="d-flex mt-4">
                                    <i class="uil uil-check-circle h4 text-primary"></i>

                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0">Buy, sell, and trade on the go</h6>
                                        <p class="text-muted mt-2 mb-0">Manage your holdings from your mobile device</p>
                                    </div>
                                </li>

                                <li class="d-flex mt-4">
                                    <i class="uil uil-check-circle h4 text-primary"></i>

                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0">Take control of your wealth</h6>
                                        <p class="text-muted mt-2 mb-0">Rest assured you (and only you) have access to your funds</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <a href="crypto-wallets.html" class="btn btn-primary">Download Wallet</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6">
                        <div class="">
                            <img src="{{ asset('frontend/images/app/hand-with-mobile.png') }}" class="img-fluid" alt="">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!--end section-->
        <!-- End -->

        <!-- Counter Start -->
        <section class="section" style="background: url('{{ asset("frontend/images/bg/cta.png") }}') top;">
            <div class="bg-overlay bg-light opacity-7"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <h6 class="text-muted mb-0">Founded in</h6>
                            <h2 class="mb-0 display-6 mt-3 fw-bold text-primary"><span class="counter-value" data-target="2021">1990</span></h2>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="text-center">
                            <h6 class="text-muted mb-0">Team Member</h6>
                            <h2 class="mb-0 display-6 mt-3 fw-bold text-primary"><span class="counter-value" data-target="1000">551</span>+</h2>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="text-center">
                            <h6 class="text-muted mb-0">Users</h6>
                            <h2 class="mb-0 display-6 mt-3 fw-bold text-primary"><span class="counter-value" data-target="10">1</span>M</h2>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="text-center">
                            <h6 class="text-muted mb-0">Insurance Coverage (USD)</h6>
                            <h2 class="mb-0 display-6 mt-3 fw-bold text-primary"><span class="counter-value" data-target="410">210</span>M</h2>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Counter End -->

        <!-- Footer Start -->
        
		<!--end footer-->
    
    @endsection

   
    @section('scripts')

    @endsection
