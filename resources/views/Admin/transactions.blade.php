
@extends('Layout.master')
@section('title')
<title>Ramecoin |Transactions</title>
@endsection


@section('content')
    <div class="container-fluid" id="transactions">
        <div class="row">
        <div class="col-12">
            <div class="mb-30">
                <h4 class="card-title">Transactions</h4>
                <div class="row">
                   

                <div class="col-xl-12 height-card box-margin">
                    <div class="card">
                        <div class="card-body">


                            <ul class="nav nav-tabs nav-bordered nav-justified">
                                <li class="nav-item">
                                    <a href="#deposit" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        Deposit

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#withdrawals" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                       Withdrawals
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="deposit">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Amount</th>
                                                            <th>Payment Mode</th>
                                                            <th>Status</th>
                                                           <th>Date Created</th>      
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr v-cloak v-for="(transaction, index) in transactions">
                                                            <td>$@{{ transaction.amount }}</td>
                                                            <td>Coin</td>
                                                            <td>
                                                                <div v-if="transaction.status ==='pending'">
                                                                     <div class="badge badge-info">@{{ transaction.status }}</div>
                                                                </div>
                                                                <div v-if="transaction.status ==='success'">
                                                                     <div class="badge badge-success">@{{ transaction.status }}</div>
                                                                </div>

                                                            </td>
                                                            <td>@{{ transaction.created_date }}</td>
                                                            <td>
                                                            <!-- <button type="button" class="btn btn-success">Action</button> -->
                                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" data-toggle="modal" @click="checkStatus(index)" data-animation="bounce" data-target="#changeStatus" href="#">Change Status</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <!-- <a class="dropdown-item" href="#">Delete</a> -->
                                                                </div>
                                                            </td>
                                                            
                                                        </tr>
                                                    
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>

                                     <!-- Transaction Status Modal -->
                                   <div class="modal fade" id="changeStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        @csrf
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content p-3">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="form-group">
                                                    <!-- <label class="col-md-4">Change Status</label>  -->
                                                    <select v-model="transaction.status" class="custom-select" id="status-select">
                                                        <option selected="">Choose Status</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="success">Success</option>
                                                        <option value="failed">Failed</option>    
                                                    </select>
                                                </div>
                                               
                                                <div class="modal-footer">
  
                                                    <button v-if="!isLoading"  type="button" @click="updateStatus()" class="btn btn-sm btn-primary">Proceed</button>
                                                    <div v-if="isLoading" class="spinner-border text-success" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    <button  v-if="!isLoading" type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <!-- Modal -->
                               
                                    
                                <div class="tab-pane" id="withdrawals">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Amount Request</th>
                                                            <th>Amount + Charges</th>
                                                            <th>Recieving Mode</th>
                                                        <th>Status</th>      
                                                        <th>Date Created</th>      
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>$2000</td>
                                                            <td>Coin</td>
                                                            <td>Pending</td>
                                                            <td>61</td>
                                                            <td>61</td>
                                                            
                                                        </tr>
                                                    
                                                        
                                                    </tbody>
                                                </table>
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
        <div class="md-overlay"></div>
        </div>

        <textarea name="" id="getTransactions" style="display:none;" cols="30" rows="10">{{ json_encode($transactions) }}</textarea>
        <textarea name="" id="status" style="display:none;" cols="30" rows="10">{{ route('transactions.update.status') }}</textarea>
        
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin-transactions.js') }}"></script>
@endsection