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
                <div class="card">
                    <div class="card-body">
                       <h4 class="text-muted">Welcome {{ $user->name }}</h4>
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

                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Sales</h6>
                                <span class="badge badge-pill badge-primary">68% Done</span>
                            </div>
                            <h6 class="mb-0">$13,0278.78 <span>(+6.71)</span></h6>
                            <p class="mb-0">Total Profit</p>
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

                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Cost</h6>
                                <span class="badge badge-pill badge-primary">68% Done</span>
                            </div>
                            <h6 class="mb-0">$13,0278.78</h6>
                            <p class="mb-0">Total Deposit</p>
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

                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Cost</h6>
                                <span class="badge badge-pill badge-primary">68% Done</span>
                            </div>
                            <h6 class="mb-0">$13,0278.78</h6>
                            <p class="mb-0">Total Deposit</p>
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

                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
                                <h6 class="mb-0">Cost</h6>
                                <span class="badge badge-pill badge-primary">68% Done</span>
                            </div>
                            <h6 class="mb-0">$13,0278.78</h6>
                            <p class="mb-0">Total Deposit</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection

@section('script')
@endsection
