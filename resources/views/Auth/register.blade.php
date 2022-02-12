
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <title>Ramecoin</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/core-img/favicon.png') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('template/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>

<body class="login-area">

    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh" id="auth">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="hero">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">

                                <!-- Logo -->
                                <h4 class="font-24 mb-30">Create an Account</h4>

                                <div>
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control login" v-model="account.name" type="text" id="name" required="" placeholder="Enter your Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="form-control login" v-model="account.email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control login"  v-model="account.password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control login" v-model="account.password_confirmation" type="password" required="" id="password" placeholder="Confirm Password">
                                    </div>

                                    

                                    <div class="form-group mb-0">
                                        <button @click="authenticateUser()" class="btn btn-primary btn-block" type="button"> Log In </button>
                                    </div>

                                    <div class="text-center mt-15"><span class="mr-2 font-12">Have an account?</span><a class="font-12" href="{{ route('login') }}">Login</a></div>

                               </div>

                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->


    <script src="{{ asset('library/axios.min.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/bundle.js') }}"></script>    <!-- Active JS -->
    <script src="{{ asset('template/js/default-assets/active.js') }}"></script>

    <script src="{{ asset('js/authenticate.js') }}"></script>

</body>
</html>