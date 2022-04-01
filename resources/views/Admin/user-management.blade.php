@extends('Layout.master')
@section('title')
<title>Ramecoin | Usermanagement</title>
@endsection

@section('styles')
<style>
.scrollbar{
    scrollbar-width: thin;
}
</style>
@endsection

@section('content')
        <!-- Page Content -->
        <div class="container-fluid" id="user-management">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30 scrollbar" style="max-height:300px; overflow:auto;">
                        <div class="card-body pb-0">
                            <!-- <div class="row form-group">
                                <div class="col-md-3 text-right">
                                    <input style="width:300px;"class="form-control p-2" v-model="filter" type="text" placeholder="Search User">
                                </div>
                            </div> -->

                            <div class="text-right p-2">
                                <input style="width:300px;"class="form-control p-2" v-model="filter" type="text" placeholder="Search User">
                            </div>

                         <div class="row" v-for="(userData, index) in getUsers">
                                <!-- Single Card -->
                            <div class="col-sm-6 col-xl-12">                     
                                <a class="message-card card px-5 py-3 mb-4" href="#">                        
                                    <div class="row">
                                        <div class="col-xl-3 d-flex align-items-center flex-column flex-xl-row text-center ">
                                            <!-- <div class="people-data h5 mb-0">24 <span>Apr</span></div> -->
                                            <img class="avatar avatar-md p-1 mx-3 my-2 my-xl-0"
                                                src="{{ asset('user.png') }}" alt="..."
                                                style="max-width: 3rem">
                                            <h6 v-cloak class="mb-0">@{{ userData.name }}</h6>
                                        </div>
                                        <div class="col-xl-9 d-flex align-items-center flex-column flex-xl-row text-center text-md-left">
                                            <div v-cloak class="btn btn-rounded btn-outline-info mr-5" @click="selectUser(index)" data-toggle="modal" data-animation="bounce" data-target=".editUser">@{{ userData.email }}</div>
                                            <div v-cloak class="badge badge-primary" @click="selectUser(index)" data-toggle="modal" data-animation="bounce" data-target="#changePassword">@{{  userData.mobile  }}</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div @click="deleteUser(index)" class="text-right people-data h5 mb-0"><span class="text-danger"><i class="fal fa-trash-alt text-danger font-16"></i>&nbsp;&nbsp;Delete</span></div>
                                        </div>
                                       
                                    </div>
                                </a>
                            </div>
                          </div>
                            <div class="text-right p-2">
                                <button type="button" class="btn btn-rounded btn-outline-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".addUser">+ Add User <i class="fas fa-users"></i></button>
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
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
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
                                @if(Auth::user()->role === "admin")
                                 <option value="admin">Admin</option>
                                 @endif
                               
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

        <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="false">
            <div class="modal-dialog modal-md p-3">
                @crsf
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 font-16 text-center" id="myLargeModalLabel">Change Password</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
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
                            <button type="button" @click="changeUserSecret()" class="btn btn-sm btn-primary">Save</button> 
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
            <div class="modal-dialog p-3" role="document">
                @csrf
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 font-16" id="myLargeModalLabel">Edit User</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    </div>
                    <div class="modal-body p-2">
                        <div>
                                       
                        <div class="form-group">
                            <label class="col-md-4">Name</label>
                            <input type="text" class="form-control" v-model="updateUser.name" id="LeadName"  placeholder="Enter Name" required="">
                        </div>
                    
                        <div class="form-group">
                            <label  class="col-md-4">Email</label> 
                            <input type="text"  v-model="updateUser.email"  class="form-control" id="LeadEmail" required="" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4">Mobile</label> 
                            <input type="text" v-model="updateUser.mobile" placeholder="Enter Mobile number" class="form-control" id="LeadEmail" required="">
                        </div>


                        <div class="form-group">
                            <label class="col-md-4">Role Priviledges</label> 
                            <select v-model="updateUser.role" class="custom-select" id="status-select">
                            @if(Auth::user()->role === "admin")
                                <option value="admin">Admin</option>
                            @endif
                                <option value="member">Member</option>
                                <option value="support">Support</option>    
                            </select>
                        </div>
                        
                          <div class="mt-5 text-right">
                            <button type="button" @click="update()" class="btn btn-sm btn-primary">Save Changes</button> 
                            <div v-if="isLoading" class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-secondary">Cancel</button>
                          </div>
                            

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->



            <textarea name="" id="users" style="display:none;" cols="30" rows="10">{{ json_encode($users) }}</textarea>
            <textarea name="" id="createUser" style="display:none;" cols="30" rows="10">{{ route('admin.user-create') }}</textarea>
            <textarea name="" id="update" style="display:none;" cols="30" rows="10">{{ route('admin.user-update') }}</textarea>
      
            <textarea name="" id="changeSecret" style="display:none;" cols="30" rows="10">{{ route('admin.user-secret') }}</textarea>
            <textarea name="" id="userdelete" style="display:none;" cols="30" rows="10">{{ route('user.delete') }}</textarea>

        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('js/user-management.js') }}"></script>
@endsection
