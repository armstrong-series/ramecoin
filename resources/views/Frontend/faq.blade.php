@extends('Frontend.Layout.master')
@section('title')
    <title>Ramecoin |FAQ</title>
@endsection

@section('content')
     
        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="card section-title bg-white p-4 shadow rounded border-0">
                            <ul class="nav nav-pills nav-justified flex-column bg-transparent mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded shadow active" id="pills-buying-tab" data-bs-toggle="pill" href="#pills-buying" role="tab" aria-controls="pills-buying" aria-selected="false">
                                        <div class="text-start py-1 px-3">
                                            <h6 class="mb-0">About Ramecoin</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item mt-3">
                                    <a class="nav-link rounded shadow" id="pills-general-tab" data-bs-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">
                                        <div class="text-start py-1 px-3">
                                            <h6 class="mb-0">Investment</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item mt-3">
                                    <a class="nav-link rounded shadow" id="pills-payment-tab" data-bs-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">
                                        <div class="text-start py-1 px-3">
                                            <h6 class="mb-0">Transactions</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item mt-3">
                                    <a class="nav-link rounded shadow" id="pills-support-tab" data-bs-toggle="pill" href="#pills-support" role="tab" aria-controls="pills-support" aria-selected="false">
                                        <div class="text-start py-1 px-3">
                                            <h6 class="mb-0">Cryptocurrency Withdrawals</h6>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul><!--end nav pills-->
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-7 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-buying" role="tabpanel" aria-labelledby="pills-buying-tab">
                                <div class="section-title" id="tech">
                                    <h5>About Cryptor</h5>
                                </div>
        
                                <div class="accordion mt-4 pt-2" id="buyingquestion">
                                    <div class="accordion-item rounded border-0 shadow">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-0 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                What is Cryptor?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#buyingquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How does Cryptor work?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#buyingquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Why should I trust you?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#buyingquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                What is exchange rate?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#buyingquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                                <div class="section-title" id="general">
                                    <h5>Accounts</h5>
                                </div>
        
                                <div class="accordion mt-4 pt-2" id="generalquestion">
                                    <div class="accordion-item rounded border-0 shadow">
                                        <h2 class="accordion-header" id="headingfive">
                                            <button class="accordion-button border-0 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                aria-expanded="true" aria-controls="collapsefive">
                                                Why do I need to enter my email?
                                            </button>
                                        </h2>
                                        <div id="collapsefive" class="accordion-collapse border-0 collapse show" aria-labelledby="headingfive"
                                            data-bs-parent="#generalquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingsix">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                aria-expanded="false" aria-controls="collapsesix">
                                                What is the 2-factor authentication?
                                            </button>
                                        </h2>
                                        <div id="collapsesix" class="accordion-collapse border-0 collapse" aria-labelledby="headingsix"
                                            data-bs-parent="#generalquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingseven">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                What should I do if I lose a device with 2FA authentication?
                                            </button>
                                        </h2>
                                        <div id="collapseseven" class="accordion-collapse border-0 collapse" aria-labelledby="headingseven"
                                            data-bs-parent="#generalquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingeight">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                What happens when I receive an order ?
                                            </button>
                                        </h2>
                                        <div id="collapseeight" class="accordion-collapse border-0 collapse" aria-labelledby="headingeight"
                                            data-bs-parent="#generalquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                <div class="section-title" id="payment">
                                    <h5>Transactions</h5>
                                </div>
        
                                <div class="accordion mt-4 pt-2" id="paymentquestion">
                                    <div class="accordion-item rounded border-0 shadow">
                                        <h2 class="accordion-header" id="headingnine">
                                            <button class="accordion-button border-0 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine"
                                                aria-expanded="true" aria-controls="collapsenine">
                                                What’s a wallet address?
                                            </button>
                                        </h2>
                                        <div id="collapsenine" class="accordion-collapse border-0 collapse show" aria-labelledby="headingnine"
                                            data-bs-parent="#paymentquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingten">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten"
                                                aria-expanded="false" aria-controls="collapseten">
                                                How do I get a wallet address?
                                            </button>
                                        </h2>
                                        <div id="collapseten" class="accordion-collapse border-0 collapse" aria-labelledby="headingten"
                                            data-bs-parent="#paymentquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingeleven">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                What's the recipient’s address?
                                            </button>
                                        </h2>
                                        <div id="collapseeleven" class="accordion-collapse border-0 collapse" aria-labelledby="headingeleven"
                                            data-bs-parent="#paymentquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingtwelve">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                What is the maximal/minimal amount?
                                            </button>
                                        </h2>
                                        <div id="collapsetwelve" class="accordion-collapse border-0 collapse" aria-labelledby="headingtwelve"
                                            data-bs-parent="#paymentquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">
                                <div class="section-title" id="support">
                                    <h5>Cryptocurrency Withdrawals</h5>
                                </div>
        
                                <div class="accordion mt-4 pt-2" id="supportquestion">
                                    <div class="accordion-item rounded border-0 shadow">
                                        <h2 class="accordion-header" id="headingthirteen">
                                            <button class="accordion-button border-0 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirteen"
                                                aria-expanded="true" aria-controls="collapsethirteen">
                                                Which currencies are accepted for crypto-to-fiat transactions?
                                            </button>
                                        </h2>
                                        <div id="collapsethirteen" class="accordion-collapse border-0 collapse show" aria-labelledby="headingthirteen"
                                            data-bs-parent="#supportquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingfourteen">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefourteen"
                                                aria-expanded="false" aria-controls="collapsefourteen">
                                                What limits are set for this transaction type?
                                            </button>
                                        </h2>
                                        <div id="collapsefourteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfourteen"
                                            data-bs-parent="#supportquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingfifteen">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                                                What is SEPA bank transfer?
                                            </button>
                                        </h2>
                                        <div id="collapsefifteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfifteen"
                                            data-bs-parent="#supportquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="accordion-item rounded border-0 shadow mt-3">
                                        <h2 class="accordion-header" id="headingsixteen">
                                            <button class="accordion-button border-0 bg-white collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                                                Which countries support crypto-to-fiat transactions?
                                            </button>
                                        </h2>
                                        <div id="collapsesixteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingsixteen"
                                            data-bs-parent="#supportquestion">
                                            <div class="accordion-body text-muted bg-white">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            
            <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: -1; opacity: 0.1;">
                <img src="images/icon-gradient.png" height="550" alt="">
            </div>
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-4">Be the first to know about Crypto news everyday</h4>
                            <p class="para-desc mx-auto text-muted mb-0">Get crypto analysis, news and updates right to your inbox! Sign up here so you don't miss a single newsletter.</p>
                        
                            <div class="subcribe-form mt-5">
                                <form>
                                    <div class="mb-0">
                                        <input type="email" id="email" name="email" class="bg-white rounded" required placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Notify me</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

     
        
        

       
       @endsection