@extends('Frontend.Layout.master')
@section('title')
    <title>Renewal |About</title>
@endsection

@section('content')
     
      

        <!-- Start About -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="position-relative me-lg-5">
                            <img src="{{ asset('frontend/images/illustration/revenue.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title">
                            <h4 class="title mb-3 mt-2">Our Story</h4>

                            <p class="text-muted">Ramecoin is a solution for creating an investment management platform. It is suited for hedge or mutual fund managers and cryptocurrency traders who are looking at runing pool trading system. Onlinetrader simplifies the investment, monitoring and management process. With a secure and compelling mobile-first design, together with a default front-end design, it takes few minutes to setup your own investment management or pool trading platform.</p>

                            <p class="text-muted mb-0">We started in 2020 with the radical idea that anyone, anywhere, should be able to easily and securely send and receive any cryptocurrency. Today, we offer a trusted and easy-to-use platform for accessing the broader cryptoeconomy.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-2 order-md-1">
                        <div class="section-title me-lg-5">
                            <h4 class="title mb-3">Build the future of technology</h4>
                            <p class="text-muted">What's the secret to Cryptor's success? The answer is obvious: Our people. We are proud to have one of the most talented, hardworking and passionate teams the world has to offer. Interested in joining our team?</p>
                        
                            <ul class="list-unstyled text-muted mb-0">
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><span class="fw-medium">Cryptor Wallet.</span>  Your Keys, Your Crypto.</li>
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><span class="fw-medium">Cryptor Earn.</span>  No lock-up period and stable returns.</li>
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><span class="fw-medium">Cryptor Swap.</span>  Swap Cryptor coins and earn Triple Yield.</li>
                            </ul>

                            <div class="mt-4">
                                <a href="{{ route('auth.signup') }}" class="btn btn-soft-primary"><i class="uil uil-wallet"></i> Join Us</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 order-1 order-md-2">
                        <img src="{{ asset('frontend/images/illustration/bills.svg') }}" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-1 order-md-2">
                        <div class="section-title ms-lg-5">
                            <h4 class="title mb-3">Join us</h4>
                            <p class="text-muted mb-0">We’re currently hiring. If our company mission means something to you, you’re invited to join the Bitcoin.com team.</p>

                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-arrow-growth"></i> See Plans</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 order-2 order-md-1">
                        <img src="{{ asset('frontend/images/illustration/profit.svg') }}" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="d-flex align-items-center feature feature-primary feature-clean shadow rounded p-4">
                            <div class="icons text-primary text-center">
								<i class="fas fa-user-alt d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="flex-1 content ms-4">
                                <a href="javascript:void(0)" class="text-dark h5 title">Create an Account</a>
                                <p class="text-muted mb-0">Create an account with us using your preffered email/username</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="d-flex align-items-center feature feature-primary feature-clean shadow rounded p-4">
                            <div class="icons text-primary text-center">
								<i class="fas fa-chart-line d-block rounded h3 mb-0"></i>
                                
                            </div>
                            <div class="flex-1 content ms-4">
                                <a href="javascript:void(0)" class="text-dark h5 title">Make Deposit</a>
                                <p class="text-muted mb-0">Make A deposit with any of your preffered currency</p>
                                
                            </div>
                        </div>
                    </div><!--end col-->

					<div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="d-flex align-items-center feature feature-primary feature-clean shadow rounded p-4">
                            <div class="icons text-primary text-center">
							   <i class="fas fa-wallet d-block rounded h3 mb-0"></i>
                                <!-- <i class="uil uil-webcam d-block rounded h3 mb-0"></i> -->
                            </div>
                            <div class="flex-1 content ms-4">
                                <a href="javascript:void(0)" class="text-dark h5 title">Start Trading/Investment</a>
                                <p class="text-muted mb-0">Start trading with Indices commodities e.tc</p>
                                
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End About -->

        <!-- Footer Start -->
       
		<!--end footer-->
        <!-- Footer End -->


@endsection

@section('scripts')

@endsection
       
      