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
                <button type="button" class="btn-primary btn-sm p-2" data-toggle="modal" data-target="#addWallet">Add Wallet Address</button>
                <div class="card">
                    <div class="card-body">
                       <h5 class="">Welcome {{ $user->name }} !</h5>
                       <p class="mb-0 text-muted">Ramecoin Investment</p>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="addWallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update your Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-4">Name</label>  
                            <input type="text"  class="form-control" placeholder="E.g BTC">
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-4">Address</label>  
                            <input type="text"  class="form-control" placeholder="Enter the Crypto Address">
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Proceed</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3 mb-30">
                <div class="card widget-slider-area p-20">
                    <div class="widget-slides owl-carousel">
                        <!-- Single Slider -->
                        <div class="widget-slider-content">
                            <div class="d-flex justify-content-between align-items-center mb-15">
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
                            </div>
                            <h6 class="mb-0">{{ $totalDeposits }}</h6>
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
                                <!-- <h6 class="mb-0">Users</h6> -->
                                <!-- <span class="badge badge-pill badge-primary">79% Done</span> -->
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
                            </div>
                            <h6 class="mb-0">$79,639.69</h6>
                            <p class="mb-0">Total Withdrawal(s)</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection

@section('script')
@endsection
