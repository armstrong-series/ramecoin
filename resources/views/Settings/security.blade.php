@extends('Layout.settings-master')
@section('title')
<title>Security </title>
@endsection
 
      
@section('content')
    <div class="container-fluid" id="userSecurity">
        <div class="row">
            
            <div class="col-9 box-margin height-card">
                @csrf
                <div class="card">
                    <div class="card-body">
                        @if(Auth::user()->role ==="member" || Auth::user()->role ==="team")
                            <div class="text-right p-2">
                                <button class="btn btn-sm btn-outline-danger" type="button">Delete Account</button>                                                                                                                                                                                                                  
                            </div>
                        @endif
                        <!-- <h5 class="card-title">User's Information</h5> -->
                        <div class="input-group mb-3">
                            <input type="text" v-model="account.name" class="form-control" placeholder="{{ Auth::user()->name }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Name</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" disabled placeholder="{{ Auth::user()->email }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Email</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" v-model="account.mobile" class="form-control" placeholder="{{ Auth::user()->mobile }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Mobile</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" v-model="account.password" class="form-control" placeholder="" aria-label="Recipient's password" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Password</span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" v-model="account.confirm_password" class="form-control" placeholder="" aria-label="Recipient's Confirm Password" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Confirm Password</span>
                            </div>
                        </div> 
                        <div class="input-group">
                            <div v-if="!isLoading">
                              <button @click="updateAccount()" type="button" class="btn btn-primary btn-block">Save Changes</button>
                            </div>
                            <div v-cloak v-if="isLoading" role="status">
                                 <button type="button" class="btn btn-primary btn-block">Processing ...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <textarea name="" id="updateUser" style="display:none;" cols="30" rows="10">{{ route('user.details.update') }}</textarea>
    </div>
@endsection    
            
@section('script')
    <script src="{{ asset('js/settings/security.js') }}"></script>
@endsection
   
    


   