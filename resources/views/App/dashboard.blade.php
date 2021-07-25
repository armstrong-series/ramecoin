@extends('Layout.master')
@section('title')
<title>Nairax | Logistics</title>
@endsection

@section('content')
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
           @include('Includes.header')
            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid">
                     <div class="col-12 box-margin">
                         <div class="card">
                            <div class="bg-size-cover bg-img py-5" style="background-image: url( '{{ asset("templates/img/bg-img/7.jpg") }}');">
                                 <div class="row">
                                         <div class="col-lg-6 col-md-8">
                                                <div class="pl-4">
                                                    <h5 class="font-17">Shop cheap<span class="badge badge-success ml-3">Sale up to 40%</span></h5>
                                                    <h3 class="mb-4">Backpacks for your next adventure</h3>
                                                    <h5 class="mb-0 text-danger">Hurry up! Limited time offer.</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-id-badge text-primary font-30"></i></div><span class="badge badge-primary">Sessions</span>
                                    <h4 class="my-3">226k</h4>
                                    <p class="mb-0"><span class="text-success"><i class="fa fa-level-up mr-1" aria-hidden="true"></i>7.5%</span>New Sessions Today</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6 col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-bar-chart-o font-30"></i></div><span class="badge badge-secondary">Avg.Sessions</span>
                                    <h4 class="my-3">00:28</h4>
                                    <p class="mb-0"><span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>1.4%</span> Weekly Avg.Sessions</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span>
                                    <h4 class="my-3">$2500</h4>
                                    <p class="mb-0"><span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> Bounce Rate Weekly</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>

                    </div>
                </div>

                <!-- Footer Area -->
                @include('Includes.footer')
            </div>
        </div>
@endsection

@section('script')

@endsection