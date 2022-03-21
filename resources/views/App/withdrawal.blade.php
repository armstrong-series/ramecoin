@extends('Layout.master')
@section('title')
<title>Ramecoin | Withdrawal</title>
@endsection

@section('content')

    <div class="main-container-wrapper">
    
        <div class="container-fluid page-body-wrapper">
          

            <!-- Main page -->
            <div class="main-panel">
                <div class="content-wrapper" id="withdrawal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12" v-if="paymentMethod.paypal || paymentMethod.paystack">
                                <!-- Content -->
                                <div class="card mb-30">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <!-- Pretitle -->
                                                
                                                <!-- Title -->
                                                <h2 class="font-24 text-center">Request for Withdrawal </h2>

                                            </div>
                                            
                                        </div> <!-- / .row -->
                                        
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-4 text-dark">
                                                     Paypal
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                        <div class="row">
                                            <div class="col-12 col-md-6">

                                                 <p class="mb-4 text-dark">
                                                    Minimum amount:
                                                </p>
                                                <p class="mb-4 text-dark">
                                                    Maximum amount:
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    Charge Type:
                                                </p>

                                                <p class="mb-4 text-dark">
                                                   Duration:
                                                </p>

                                            </div>
                                            <div class="col-12 col-md-6 text-md-right">

                                                <p class="mb-4 text-dark">
                                                    $10
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    $10000
                                                </p>
                                                <p class="mb-4 text-dark">
                                                   Percentage
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    Instant Payment
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                        <div class="form-group p-3 text-center"  v-if="paymentMethod.paypal">
                                           <button @click="switchPayment()" class="btn btn-md btn-primary">Request withdrawal &nbsp;<i class="fas fa-wallet"></i></button>

                                        </div>


                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-6" v-if="!paymentMethod.paypal">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="shortcode-html">
                                           
                                            <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="font-15 text-secondary">Your Payment method is Paypal</h5>
                                                        </div>
                                                    </div>
                                                
                                                <div class="form-group">
                                                    <label for="lgFormGroupInput2">Enter Amount to Withdraw</label>
                                                    <div class="">
                                                        <input type="text" class="form-control rounded-0 form-control-md" id="lgFormGroupInput2" placeholder="Enter Amount">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Enter OTP</label>
                                                    <div class="">
                                                        <input type="text" class="form-control rounded-0 form-control-md" id="lgFormGroupInput3" placeholder="Enter Code">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-md btn-primary">Confirm</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- End Horizontal (form sizes) -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6" v-if="!paymentMethod.paypal">                    
                                <div class="card">
                                    <div class="card-body">
                                        <div class="shortcode-html">
                                            <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
                                                <div class="form-group">
                                                    <div class="text-center">
                                                         <p v-cloak class="mb-4 text-dark text-center">Generate OTP</p>

                                                        <button type="button" class="btn btn-md btn-primary">Request OTP &nbsp;<i class="fas fa-envelope"></i></button>
                                                    </div>
                                                </div>  
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>




                            <!-- <div class="col-6" v-if="!paymentMethod.paystack">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="shortcode-html">
                                           
                                            <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="font-17">Your Payment method is Paystack</h5>
                                                        </div>
                                                    </div>
                                                
                                                <div class="form-group">
                                                    <label for="lgFormGroupInput2">Enter Amount to Withdraw</label>
                                                    <div class="">
                                                        <input type="text" class="form-control rounded-0 form-control-md" id="lgFormGroupInput2" placeholder="Enter Amount">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Enter OTP</label>
                                                    <div class="">
                                                        <input type="text" class="form-control rounded-0 form-control-md" id="lgFormGroupInput3" placeholder="Enter Code">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-md btn-primary">Confirm</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="row">
                            <div class="col-12" v-if="paymentMethod.paypal || paymentMethod.paystack">
                                <!-- Content -->
                                <div class="card mb-30">
                                    <div class="card-body p-5">
                                       
                                        
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-4 text-dark">
                                                     Paystack
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                        <div class="row">
                                            <div class="col-12 col-md-6">

                                                 <p class="mb-4 text-dark">
                                                    Minimum amount:
                                                </p>
                                                <p class="mb-4 text-dark">
                                                    Maximum amount:
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    Charge Type:
                                                </p>
                                                <p class="mb-4 text-dark">
                                                    Charges Amount:
                                                </p>

                                                <p class="mb-4 text-dark">
                                                   Duration:
                                                </p>

                                            </div>
                                            <div class="col-12 col-md-6 text-md-right">

                                                <p class="mb-4 text-dark">
                                                    $10
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    $10000
                                                </p>
                                                <p class="mb-4 text-dark">
                                                   Percentage
                                                </p>
                                                <p class="mb-4 text-dark">
                                                   0%
                                                </p>

                                                <p class="mb-4 text-dark">
                                                    Automatic Payment
                                                </p>

                                            </div>
                                        </div> <!-- / .row -->

                                        <div class="form-group p-3 text-center">
                                            <button @click="switchPayment()" class="btn btn-md btn-primary">Request withdrawal &nbsp;<i class="fas fa-wallet"></i></button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection   

@section('script')
    <script src="{{ asset('js/withdrawal.js') }}"></script>
@endsection