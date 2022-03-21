
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
                                        <div class="col-md-12">
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
                                                                <div v-if="transaction.status ==='failed'">
                                                                     <div class="badge badge-danger">@{{ transaction.status }}</div>
                                                                </div>

                                                            </td>
                                                            <td>@{{ transaction.created_date }}&nbsp;

                                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" data-toggle="modal" @click="checkStatus(index)" data-animation="bounce" data-target="#changeStatus" href="#">Change Status</a>
                                                                    <div class="dropdown-divider"></div>

                                                                    <a href="javascript:void(0);" title="download"  @click='downloadPaymentProof(transaction.file)' class="dropdown-item text-primary">Download &nbsp;&nbsp<svg style="height:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" data-animation="bounce" data-target="#roi" @click="selectTransaction(index)" data-toggle="modal" href="#">Increase ROI</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item delete-transaction" @click="deleteTransaction(index)" href="javascript:void(0);">Delete &nbsp;&nbsp;<svg style="height:15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path  d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg></a>
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
                                        <div class="modal-dialog p-3" role="document">
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


                                 <!-- ROI -->
                                 <div class="modal fade" id="roi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        @csrf
                                        <div class="modal-dialog p-3" role="document">
                                            <div class="modal-content p-3">
                                                <div class="modal-header">
                                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Change Status</h5> -->
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg style="height:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z"/></svg>
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="form-group">
                                                   
                                                    <select v-model="perecentageChange" class="custom-select" id="roi-select">
                                                        <option selected>Add ROI</option>
                                                        <option value="20">20%</option>
                                                        <option value="30">30%</option>
                                                        <option value="40">40%</option>
                                                        <option value="50">50%</option>
                                                        <option value="60">60%</option>
                                                        <option value="70">70%</option>
                                                        <option value="80">80%</option>
                                                        <option value="90">90%</option>
                                                         
                                                    </select>
                                                </div>
                                               
                                                <div class="modal-footer">
  
                                                    <button v-if="!isLoading" @click="addReturnOnInvestment()" type="button" class="btn btn-sm btn-primary">Increase</button>
                                                    <div v-if="isLoading" class="spinner-border text-success" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    <button type="button"  class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                 <!-- /end -->
                               
                                    
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
        <textarea name="" id="delete" style="display:none;" cols="30" rows="10">{{ route('admin.delete.transaction') }}</textarea>
        <textarea name="" id="returns" style="display:none;" cols="30" rows="10">{{ route('investment.returns') }}</textarea>
        
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin-transactions.js') }}"></script>
@endsection