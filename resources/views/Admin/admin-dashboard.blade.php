@extends('Layout.master')
@section('title')
<title>Ramecoin |Admin</title>
@endsection

@section('content')
        <!-- Page Content -->
    <div class="container-fluid">
        <!-- Widgets Data -->

        <div class="row">
            <div class="col-12 box-margin" id="dashboard">
                <button type="button" class="btn-primary btn-sm p-2">Add Wallet Address</button>
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
                            <h6 class="mb-0">$79,639.69</h6>
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
                                <!-- <h6 class="mb-0">Users</h6> -->
                                <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">{{ $usersCount }}</h6>
                            <p class="mb-0">Users</p>
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
                                <h6 class="mb-0">Total Deposits</h6>
                                <span class="badge badge-pill badge-primary">79% Done</span>
                            </div>
                            <h6 class="mb-0">$79,639.69</h6>
                            <p class="mb-0">Total Investment</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection

@section('script')
@endsection
