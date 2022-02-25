@extends('Layout.master')
@section('title')
<title>Profile</title>
@endsection

@section('content')
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
           @include('Includes.header')
            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card mb-30">
                                <img src="{{ asset('ramecoin.jpeg') }}" class="profile-cover-img" alt="thumb">
                                <div class="card-body text-center">
                                    <h6 class="font-20 mb-1">{{ Auth::user()->name }}</h6>
                                    <p class="font-13 text-dark">{{ Auth::user()->role }}</p>
                                    <!-- <p class="description px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime mollitia.</p> -->
                                    <!-- <div class="hire">
                                        <button class="btn btn-danger btn-sm mr-2 mb-2">Hire me</button>
                                        <button class="btn btn-success btn-sm mb-2">Follow me</button>
                                    </div> -->
                                    <!-- Icon -->
                                    <div class="profile-social-icon mt-15 justify-content-center d-flex">
                                        <a href="#" data-toggle="tooltip" title="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Dribbble">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Instagram">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./profile -->

                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="font-14 mb-0">
                                                <i class="fa fa-facebook mr-2 text-info"></i>Facebook
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="font-13">john.smitj98</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="font-14 mb-0">
                                                <i class="fa fa-whatsapp mr-2 text-success"></i>Whats App
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="font-13">+30-66-45-67</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="font-14 mb-0">
                                                <i class="fa fa-instagram mr-2 text-danger"></i>Instagram
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="font-13">@smithjhon</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="font-14 mb-0">
                                                <i class="fa fa-linkedin mr-2 text-primary"></i>LinkedIn
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="font-13">jonalsole</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card address mb-30">
                                <div class="card-body">
                                    <h4 class="font-18 mb-15">Contact :</h4>
                                    <div class="mt-0 d-flex align-items-center">
                                        <i class="fa fa-home pr-2"></i>
                                        <h6 class="card-text">example@example.com</h6>
                                    </div>
                                    <div class="mt-3 d-flex align-items-center">
                                        <i class="fa fa-phone pr-2"></i>
                                        <h6 class="card-text">+91 656 887 245</h6>
                                    </div>
                                    <div class="mt-3 d-flex align-items-center">
                                        <i class="fa fa-map pr-2 align-self-start"></i>
                                        <h6 class="card-text">Van Barneveldlaan 98, Netherlands</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- ./address -->
                        </div>

                        <div class="col-12 col-md-8">
                            <div class="profile-crm-area">
                                <div class="card mb-30">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs profile-tab" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">Basic</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">Invoice</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <!--first tab-->
                                            <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                                <div class="card-body">
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Full Name</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">Jhon Alin Deo</span>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Email</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">example@example.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Country</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">Netherland</span>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Address</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">Van Barneveldlaan 98 7031 ZK Wehl</span>
                                                        </div>
                                                    </div>

                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Contact</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">+88 586 887 245</span>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Date Of Birth</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">1995-05-15</span>
                                                        </div>
                                                    </div>
                                                    <div class="row profile-row">
                                                        <div class="col-xs-5 col-sm-3">
                                                            <span class="profile-cat">Gender</span>
                                                        </div>
                                                        <div class="col-xl-7 col-sm-9">
                                                            <span class="profile-info">Male</span>
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
                                                                        <td><img class="chat-img" src="img/member-img/1.png" alt="Product image "></td>
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
                                                                        <td><img class="chat-img" src="img/member-img/2.png" alt="Product image "></td>
                                                                        <td>Frogo Meltor</td>
                                                                        <td>6</td>
                                                                        <td>26</td>
                                                                        <td class="action-buttons text-center text-center">
                                                                            <a href="invoice.html">
                                                                                <i class="fa fa-eye text-dark font-16"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>D35AA9FQ</td>
                                                                        <td><img class="chat-img" src="img/member-img/8.png" alt="Product image "></td>
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
                                                                        <td><img class="chat-img" src="img/member-img/9.png" alt="Product image "></td>
                                                                        <td>Boris Sandoval</td>
                                                                        <td>9</td>
                                                                        <td>96</td>
                                                                        <td class="action-buttons text-center">
                                                                            <a href="invoice.html">
                                                                                <i class="fa fa-eye text-dark font-16"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>D5DDNA2D</td>
                                                                        <td><img class="chat-img" src="img/member-img/10.png" alt="Product image "></td>
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
                                                                        <td><img class="chat-img" src="img/member-img/11.png" alt="Product image "></td>
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

                                
                    </div>
                </div>
                <!-- Footer Area -->
                @include('Includes.footer')
            </div>
        </div>
@endsection

@section('scripts')

@endsection
