@extends('Layout.master')
@section('title')
<title>Ramecoin |Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css"
     integrity="sha512-6/gTF62BJ06BajySRzTm7i8N2ZZ6StspU9uVWDdoBiuuNu5rs1a8VwiJ7skCz2BcvhpipLKfFerXkuzs+npeKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')
        <!-- Page Content -->
    <div class="container-fluid" id="dashboard">
        <!-- Widgets Data -->
        <div class="text-right p-3">
            <button  v-cloak v-if="wallet" type="button" class="btn-outline-secondary btn-sm p-2" data-toggle="modal" data-target="#addWallet">Add Wallet &nbsp;&nbsp;<svg style="height:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M448 32C465.7 32 480 46.33 480 64C480 81.67 465.7 96 448 96H80C71.16 96 64 103.2 64 112C64 120.8 71.16 128 80 128H448C483.3 128 512 156.7 512 192V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM416 336C433.7 336 448 321.7 448 304C448 286.3 433.7 272 416 272C398.3 272 384 286.3 384 304C384 321.7 398.3 336 416 336z"/></svg></button>
            <button v-cloak v-if="!wallet" type="button" class="btn-outline-secondary btn-sm p-2" data-toggle="modal" data-target="#addWallet">Edit Wallet</button>
   
        </div>
           <div class="row">
            <div class="col-12 box-margin">

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
                        <h5 class="modal-title" id="exampleModalLabel">Add Wallet Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-4">Name</label>  
                            <input type="text" v-model="coin.name" class="form-control" placeholder="E.g BTC">
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-4">Address</label>  
                            <input type="text" v-model="coin.address" class="form-control" placeholder="Enter the Crypto Address">
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button"  @click="addCoin()" class="btn btn-primary">Proceed</button>
                        <div v-if="isLoading" class="spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
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

            <textarea name="" id="createWallet" style="display:none;" cols="30" rows="10">{{ route('coin.create') }}</textarea>


        </div>

    </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/solid.min.js" integrity="sha512-wabaor0DW08KSK5TQlRIyYOpDrAfJxl5J0FRzH0dNNhGJbeUpHaNj7up3Kr2Bwz/abLvVcJvDrJL+RLFcyGIkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('js/admin-dashboard.js') }}"></script>
@endsection
