
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <title>Ramecoin |  Withdrawal Verification</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/core-img/favicon.png') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('template/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css"
     integrity="sha512-6/gTF62BJ06BajySRzTm7i8N2ZZ6StspU9uVWDdoBiuuNu5rs1a8VwiJ7skCz2BcvhpipLKfFerXkuzs+npeKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<style>
    [v-cloak]{
        display: none;
    }
</style>

<body class="login-area">

   

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
    <!-- <div class="main-content- h-100vh" id="confirmWithdrawal"> -->
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
                                <p class="justify-between text-info">This is a secret area.  Please confirm your password before continuing.</p>
                                <form method="post" action="{{ route('password.confirm')}}">
									@csrf
                                    <div class="form-group">
                                        <a href="#" class="text-dark float-right"></a>
                                        <input  class="form-control login @error('password') is-invalid @enderror" name="password" type="password" required="" id="password" placeholder="Enter your Password">
                                        @error('password')
                                             <span class="text-danger text-center">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0">
                                        <div  class="text-center">
                                            <button class="btn btn-primary" type="button"> Confirm</button>
                                        </div>
                                        <!-- <div v-cloak v-if="isLoading" class="text-center">
                                            <button v-cloak class="btn btn-primary" type="button">
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div> -->
                                    </div>
                                </form>


                            </div>
                        </div>


                        <!-- <div class="text-center">
                            <a href="{{ url()->previous() }}" title="Go Back" style="background:darkblue; color:white; box-shadow:3px 4px 4px grey; width:300px;" class="btn btn-md" type="button"> Go Back <i class="fas fa-backward"></i>
                         </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

        <!-- Vuejs & Axios -->
     <script src="{{ asset('library/axios.min.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/bundle.js') }}"></script>
    <script src="{{ asset('js/withdrawal.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('template/js/default-assets/active.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/solid.min.js" integrity="sha512-wabaor0DW08KSK5TQlRIyYOpDrAfJxl5J0FRzH0dNNhGJbeUpHaNj7up3Kr2Bwz/abLvVcJvDrJL+RLFcyGIkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>