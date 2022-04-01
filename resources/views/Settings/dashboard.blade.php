
            
 @extends('Layout.settings-master')
@section('title')
<title>Ramecoin</title>
@endsection 
    <!-- Start Content-->

    @section('content')
    <div class="container-fluid" id="profile">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mb-30">
                    <img src="{{ asset('ramecoin.jpeg') }}" class="profile-cover-img" alt="thumb">
                    <div class="card-body text-center">
                        <h6 class="font-20 mb-1">{{ Auth::user()->name }}</h6>
                       @if(Auth::user()->role === "member")
                        <p class="font-13 text-dark">Member</p>  
                        @endif
                        @if(Auth::user()->role === "admin")
                        <p class="font-13 text-dark">Administrator</p>  
                        @endif
                        @if(Auth::user()->role === "support")
                        <p class="font-13 text-dark">Support Staff</p>  
                        @endif
                    </div>
                    <!-- <div class="px-4 py-2 text-center btn btn-primary m-auto" style="box-shadow: 4px 2px 3px;" @click="uploadImage()">
                        <span>Upload Profile</span>
                        <input type="file" @change="selectImage($event)" id="selectImageInput" name="" hidden>
                    </div> -->
                    
                </div>
                <!-- ./profile -->

            </div>

            <div class="col-12 col-md-8">
                <div class="profile-crm-area">
                    <div class="card mb-30">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            
                            <div class="tab-content" id="myTabContent">
                                <!--first tab-->
                                <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                    <div class="card-body">
                                        <div class="row profile-row">
                                            <div class="col-xs-5 col-sm-3">
                                                <span class="profile-cat">Full Name</span>
                                            </div>
                                            <div class="col-xl-7 col-sm-9">
                                                <span class="profile-info">{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                        <div class="row profile-row">
                                            <div class="col-xs-5 col-sm-3">
                                                <span class="profile-cat">Email</span>
                                            </div>
                                            <div class="col-xl-7 col-sm-9">
                                                <span class="profile-info">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="row profile-row">
                                            <div class="col-xs-5 col-sm-3">
                                                <span class="profile-cat">Mobile</span>
                                            </div>
                                            <div class="col-xl-7 col-sm-9">
                                                <span class="profile-info">{{ Auth::user()->mobile }}</span>
                                            </div>
                                        </div>
                                       

                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                                    <div class="card-body pb-0">
                                        <div class="table-content table-responsive">
                                            <div class="table-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order No</th>
                                                            <th>Image</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Total</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>UAFQA58D</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/1.png') }}" alt="Product image "></td>
                                                            <td>Jane Austin</td>
                                                            <td>10</td>
                                                            <td>24</td>
                                                            <td class="action-buttons text-center">
                                                                <a href="invoice.html">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>N89528GU</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/2.png') }}" alt="Product image "></td>
                                                            <td>Frogo Meltor</td>
                                                            <td>6</td>
                                                            <td>26</td>
                                                            <td class="action-buttons text-center text-center">
                                                                <a href="#">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>D35AA9FQ</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/8.png') }}" alt="Product image "></td>
                                                            <td>Lashunda Magyar</td>
                                                            <td>3</td>
                                                            <td>93</td>
                                                            <td class="action-buttons text-center">
                                                                <a href="invoice.html">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>55FS5SSG</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/9.png') }}" alt="Product image "></td>
                                                            <td>Boris Sandoval</td>
                                                            <td>9</td>
                                                            <td>96</td>
                                                            <td class="action-buttons text-center">
                                                                <a href="#">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>D5DDNA2D</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/10.png') }}" alt="Product image "></td>
                                                            <td>Tuan Cothren</td>
                                                            <td>4</td>
                                                            <td>73</td>
                                                            <td class="action-buttons text-center">
                                                                <a href="invoice.html">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>925935NA</td>
                                                            <td><img class="chat-img" src="{{ asset('template/img/member-img/11.png') }}" alt="Product image "></td>
                                                            <td>Aldo Iacovelli</td>
                                                            <td>5</td>
                                                            <td>69</td>
                                                            <td class="action-buttons text-center">
                                                                <a href="invoice.html">
                                                                    <i class="fa fa-eye text-dark font-16"></i>
                                                                </a>
                                                            </td>
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
            <textarea id="profileImageStore" style="display:none" >{{ route('user.profile.image') }}</textarea>
        </div>
    </div>
    @endsection


@section('script')
   <script src="{{ asset('js/profile.js') }}"></script>
@endsection



   

 