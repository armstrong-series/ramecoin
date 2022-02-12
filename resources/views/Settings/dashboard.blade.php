
            
 @extends('Layout.master')
@section('title')
<title>Ramecoin | Account Settings</title>
@endsection 
    <!-- Start Content-->

    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 box-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-thumb-contact text-center">
                            <div class="profile--tumb">
                                <img src="{{ asset('template/img/member-img/1.png') }}" alt="">
                            </div>
                            <h5 class="mt-15 mb-0">{{ Auth::user()->name }}</h5>
                            <p class="mb-0">{{ Auth::user()->role }}</p>
                           
                        </div>
                        <div class="personal-information mt-30">
                            <div class="name-text">
                              <h6 class="font-14"><span class="text-muted">Phone :</span> +0 (123) 458 7852</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <!-- Profile contacts -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="font-14 mb-0">
                                    <i class="fa fa-facebook mr-2 text-info"></i>Facebook
                                </h6>
                            </div>
                            <div class="col-auto">
                                <span class="font-14">john.smitj98</span>
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
                                <span class="font-14">+30-66-45-67</span>
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
                                <span class="font-14">@smithjhon</span>
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
                                <span class="font-14">jonalsole</span>
                            </div>
                        </div>

                        <hr class="my-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="font-14 mb-0">
                                    <i class="fa fa-pinterest-p mr-2 text-warning"></i>Pinterest
                                </h6>
                            </div>
                            <div class="col-auto">
                                <span class="font-14">livercool</span>
                            </div>
                        </div>

                        <hr class="my-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="font-14 mb-0">
                                    <i class="fa fa-linux mr-2 text-success"></i>Linux
                                </h6>
                            </div>
                            <div class="col-auto">
                                <span class="font-14">alionnext</span>
                            </div>
                        </div>

                        <hr class="my-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="font-14 mb-0">
                                    <i class="fa fa-drupal mr-2 text-primary"></i>Drupal
                                </h6>
                            </div>
                            <div class="col-auto">
                                <span class="font-14">nelonborola</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="card box-margin">
                    <div class="card-body">
                        <h4 class="card-title">My Friend List</h4>
                        <div class="friend-list">
                            <div class="profile-friend-thumb">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shari Krieger"><img src="{{ asset('template/img/member-img/1.png') }}" alt=""></a>
                            </div>

                            <div class="profile-friend-thumb">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shari Krieger"><img src="{{ asset('template/img/member-img/2.png') }}" alt=""></a>
                            </div>

                            <div class="profile-friend-thumb">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shari Krieger"><img src="{{ asset('template/img/member-img/3.png') }}" alt=""></a>
                            </div>

                            
                          
                        </div>
                    </div>
                </div>

             
            </div>

           
        </div>
    </div>
    @endsection


@section('script')
   
@endsection



   

 