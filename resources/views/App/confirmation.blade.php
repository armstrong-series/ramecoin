
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
    <div class="main-content- h-100vh" id="confirmWithdrawal">
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
                                        <input class="form-control login" v-model="authenticate.email" name="email" type="email" id="email" required="" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <input v-model="authenticate.password" class="form-control login" name="password" type="password" required="" id="password" placeholder="Enter your Password">
                                    </div>

                                    <div class="form-group mb-0">
                                        <div v-if="!isLoading">
                                            <button class="btn btn-primary btn-block" @click="authenticateWithdrawal()" type="button"> Proceed</button>
                                        </div>
                                        <div v-cloak v-if="isLoading">
                                            <button v-cloak class="btn btn-primary btn-block" type="button">
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="text-center">
                            <a href="{{ url()->previous() }}" title="Go Back" style="background:darkblue; color:white; box-shadow:3px 4px 4px grey; width:300px;" class="btn btn-md" type="button">
                            <svg style="height:30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M9.375 233.4l128-128c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H480c17.69 0 32 14.31 32 32s-14.31 32-32 32H109.3l73.38 73.38c12.5 12.5 12.5 32.75 0 45.25c-12.49 12.49-32.74 12.51-45.25 0l-128-128C-3.125 266.1-3.125 245.9 9.375 233.4z"/></svg>
                         </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <textarea name="" id="authenticateWithdrawal" style="display:none;" cols="30" rows="10">{{ route('withdrawal.authenticate') }}</textarea>


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