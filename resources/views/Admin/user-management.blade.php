@extends('Layout.master')
@section('title')
<title>Ramecoin</title>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->
@endsection

@section('content')
        <!-- Page Content -->
        <div class="container-fluid" id="user-management">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-20">
                                <h6 class="card-title mb-0">Users</h6>
                                <button type="button" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".addUser">+ Add User</button>
                            </div>
                            <div class="table-responsive order-stats">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-cloak v-for="(user, index) in users">
                                            <td>
                                              <span class="font-14">@{{ user.name }}</span>
                                                <!-- <img src="{{ asset('template/img/member-img/1.png') }}" class="chat-img" alt="User image"> -->
                                            </td>
                                            <td>
                                                <span  v-cloak class="font-14">@{{ user.email }}</span>
                                                <p class="mb-0">
                                                    <!-- <span v-cloak class="font-13">Email varified</span> -->
                                                </p>
                                            </td>
                                            <td v-cloak>@{{ user.mobile }}</td>
                                            
                                            <td>
                                                <a href="javascript:void(0);" @click="clientChangeDialog(index)" data-toggle="modal" data-animation="bounce" data-target=".editUser" class="mr-2">
                                                    <i class="fa fa-edit text-info font-18"></i>
                                                </a>
                                                @if(Auth::user()->role == "admin")
                                                <a href="javascript:void(0);" data-toggle="modal" data-animation="bounce" data-target=".change_secret" class="mr-2">
                                                    <i class="fa-solid fa-lock font-18"></i>
                                                </a>
                                                    <a href="javascript:void(0);" @click="deleteUser(index)">
                                                        <i class="fa fa-trash text-danger font-18"></i>
                                                    </a>
                                                @endif
                                                
                                            </td>
                                        </tr>
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
        <div class="modal fade addUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="false">
            <div class="modal-dialog modal-md">
                @crsf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 font-16" id="myLargeModalLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div>
                                       
                        <div class="form-group">
                            <label class="col-md-4">Name</label>
                            <input type="text" class="form-control" v-model="user.name" id="LeadName"  placeholder="Enter Name" required="">
                        </div>
                    
                        <div class="form-group">
                            <label  class="col-md-4">Email</label> 
                            <input type="email"  v-model="user.email"  class="form-control" id="LeadEmail" required="" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4">Password</label> 
                            <input type="password"  v-model="user.password"  placeholder="Enter password" class="form-control" id="LeadEmail" required="">
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4">Confirm Password</label> 
                            <input type="password" v-model="user.confirm_password" placeholder="Confirm password" class="form-control" id="LeadEmail" required="">
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4">Mobile</label> 
                            <input type="text" v-model="user.mobile" placeholder="Enter Mobile number" class="form-control" id="LeadEmail" required="">
                        </div>


                        <div class="form-group">
                            <label class="col-md-4">Role Priviledges</label> 
                            <select v-model="user.role" class="custom-select" id="status-select">
                                <option selected="">Choose Role</option>
                                <option value="admin">Admin</option>
                                <option value="member">Member</option>
                                <option value="support">Support</option>    
                            </select>
                        </div>
                        
                          <div class="mt-5 text-right">
                            <button type="button" @click="addUser()" class="btn btn-sm btn-primary">Save</button> 
                            <div v-if="isLoading" class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-secondary">Cancel</button>
                          </div>
                            

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div class="modal fade change_secret" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="false">
            <div class="modal-dialog modal-md">
                @crsf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 font-16" id="myLargeModalLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label  class="col-md-4">Password</label> 
                                <input type="password"  v-model="updateUser.password"  placeholder="Enter password" class="form-control" id="LeadEmail" required="">
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4">Confirm Password</label> 
                                <input type="password" v-model="updateUser.confirm_password" placeholder="Confirm password" class="form-control" id="LeadEmail" required="">
                            </div>

                          <div class="mt-5 text-right">
                            <button type="button" @click="changeSecret()" class="btn btn-sm btn-primary">Save</button> 
                            <div v-if="isLoading" class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-secondary">Cancel</button>
                          </div>
                        
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div class="modal fade editUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="false">
            <div class="modal-dialog" role="document">
                @csrf
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 font-16" id="myLargeModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-2">
                        <div>
                                       
                        <div class="form-group">
                            <label class="col-md-4">Name</label>
                            <input type="text" class="form-control" v-model="updateUser.name" id="LeadName"  placeholder="Enter Name" required="">
                        </div>
                    
                        <div class="form-group">
                            <label  class="col-md-4">Email</label> 
                            <input type="email"  v-model="updateUser.email"  class="form-control" id="LeadEmail" required="" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4">Mobile</label> 
                            <input type="text" v-model="updateUser.mobile" placeholder="Enter Mobile number" class="form-control" id="LeadEmail" required="">
                        </div>


                        <div class="form-group">
                            <label class="col-md-4">Role Priviledges</label> 
                            <select v-model="updateUser.role" class="custom-select" id="status-select">
                            @if(Auth::user()->role == "admin")
                                <option value="admin">Admin</option>
                            @endif
                                <option value="member">Member</option>
                                <option value="support">Support</option>    
                            </select>
                        </div>
                        
                          <div class="mt-5 text-right">
                            <button type="button" @click="updateUser()" class="btn btn-sm btn-primary">Save</button> 
                            <div v-if="isLoading" class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-secondary">Cancel</button>
                          </div>
                            

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <textarea name="" id="users" style="display:none;" cols="30" rows="10">{{ json_encode($users) }}</textarea>
        <textarea name="" id="createUser" style="display:none;" cols="30" rows="10">{{ route('admin.user-create') }}</textarea>
        <textarea name="" id="updateUser" style="display:none;" cols="30" rows="10">{{ route('admin.user-update') }}</textarea>
        <textarea name="" id="deleteUser" style="display:none;" cols="30" rows="10">{{ route('admin.user-delete') }}</textarea>
        <textarea name="" id="#changeSecret" style="display:none;" cols="30" rows="10">{{ route('admin.user-secret') }}</textarea>
    </div>
@endsection

@section('script')
<!-- <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script> -->
    <script src="{{ asset('js/user-management.js') }}"></script>
@endsection
