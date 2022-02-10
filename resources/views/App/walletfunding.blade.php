
@extends('Layout.master')
@section('title')
<title>Renewal</title>
@endsection


@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-12 box-margin" id="funding">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Add Fund</h4> -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fundingWallet">Fund Wallet</button>

                        <!-- Modal -->
                        <div class="modal fade" id="fundingWallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            @csrf
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Fund Your wallet </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-4"> Amount </label>  
                                            <input type="text" v-model="investment.amount" class="form-control" placeholder="Enter Amount">
                                        </div>


                                        <div class="form-group">
                                            <!-- <label class="col-4"> Choose Payment</label>   -->
                                            <select name="" id="" class="form-control" v-model="investment.payment">
                                                <option value="" selected>Choose Payment</option>
                                                <option value="btc">BTC</option>
                                                <option value="usdt">USDT</option>    
                                            </select>
                                                  
                                        </div>

                                        <div class="form-group">            
                                            <div class="input-group">
                                                <input type="text" disabled class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button @click="copyAddress()" class="btn btn-secondary" type="button"><i class="fa-solid fa-copy"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-4"> Proof of Payment <small class="text-danger">*  Screenshot(Jpg, Jpeg, Png)</small></label>  
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" @click="fundWallet()" class="btn btn-primary">Proceed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>
        </div>
    </div>

    <textarea name="" id="deposit" style="display:none;" cols="30" rows="10">{{ route('user.deposit')}}</textarea>
@endsection

@section('script')
    <script src="{{ asset('js/funding.js') }}"></script>
@endsection