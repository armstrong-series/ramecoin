
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
                                                        <tr v-cloak v-for="transaction in transactions">
                                                            <td>$@{{ transaction.amount }}</td>
                                                            <td>Coin</td>
                                                            <td>
                                                                <div v-if="transaction.status ==='pending'">
                                                                     <div class="badge badge-info">@{{ transaction.status }}</div>
                                                                </div>
                                                                <div v-if="transaction.status ==='success'">
                                                                     <div class="badge badge-success">@{{ transaction.status }}</div>
                                                                </div>
                                                                <div v-if="transaction.status ==='failed'">
                                                                     <div class="badge badge-danger">@{{ transaction.status }}</div>
                                                                </div>

                                                            </td>
                                                            <td>@{{ transaction.created_date }}</td>
                                                            
                                                        </tr>
                                                    
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
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

        <textarea name="" id="Userstransactions" style="display:none;" cols="30" rows="10">{{ json_encode($transactions) }}</textarea>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/transactions.js') }}"></script>
@endsection