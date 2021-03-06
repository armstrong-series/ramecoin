
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->
    <title>Ramecoin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/core-img/favicon.png') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('template/style.css') }}">

</head>

<body class="login-area">

   

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
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

                                <h2 class="font-18  text-muted text-center mb-25">Hello, Welcome back </h3>
								@include('Includes.messages')
                                <form method="post" action="{{ route('auth.login.account') }}">
									@csrf
                                    <div class="form-group">
                                        <input class="form-control login" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <input class="form-control login" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                        <div class="checkbox d-inline mb-0">
                                            <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                            <label for="checkbox-8" class="cr mb-0 font-13">Remember me</label>
                                        </div>
                                        <span><a class="font-12 text-success" href="{{ route('auth.forgot-password') }}">Forgot your password?</a></span>
                                    </div>

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                    <div class="text-center mt-15"><span class="mr-2 font-12">Don't have an account?</span><a class="font-12" href="{{ route('auth.register') }}">Sign up</a></div>

                                </form>

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

    <!-- Plugins Js -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/bundle.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('template/js/default-assets/active.js') }}"></script>

</body>
</html>