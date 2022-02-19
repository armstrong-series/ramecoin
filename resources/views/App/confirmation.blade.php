
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
                                <h4 class="mb-30 text-center">Verify your Account</h4>
                                <div>
									@csrf
                                    <div class="form-group">
                                        <input class="form-control login" name="password" type="password" id="password" required="" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <input class="form-control login" name="confirm_password" type="password" required="" id="password" placeholder="Confirm  Password">
                                    </div>

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="button"> Proceed</button>
                                    </div>
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

    <!-- Plugins Js -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/bundle.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('template/js/default-assets/active.js') }}"></script>

</body>
</html>