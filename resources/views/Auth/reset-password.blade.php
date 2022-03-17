
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
                                <h4 class="font-24 text-center mb-30">Reset Password </h4>
								@include('Includes.messages')
                                <form method="post" action="{{route('auth.update-password')}}">
									@csrf
                                    <input type="hidden" name="token" value="{{ $user->token }}">
                                    <div class="form-group">
                                        <a href="#" class="text-dark float-right"></a>
                                        <input class="form-control login" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group">
                                        <a href="#" class="text-dark float-right"></a>
                                        <input class="form-control login" name="re-type_password" type="password" required="" id="password" placeholder="Confirm  Password">
                                    </div>

                                  

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Update Password</button>
                                    </div>

                                    <div class="text-center mt-15"><span class="mr-2 font-12">Remember Password ?</span><a class="font-12" href="{{ route('auth.login') }}">Sign in</a></div>

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