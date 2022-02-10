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
    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('template/css/default-assets/mini-event-calendar.min.css') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('template/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css"
     integrity="sha512-6/gTF62BJ06BajySRzTm7i8N2ZZ6StspU9uVWDdoBiuuNu5rs1a8VwiJ7skCz2BcvhpipLKfFerXkuzs+npeKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
@yield('title')


@yield('styles')
<style>
    [v-cloak]{
        display: none;
    }
</style>

<body>
  

    <!-- ======================================
    ******* Main Page Wrapper **********
    ======================================= -->

    <div class="main-container-wrapper">
        <!-- Top bar area -->
         @include('Includes.header')

        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu area -->
                @include('Includes.sidebar')
            <!-- partial -->

            
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')

                    <!-- Footer Area -->
                    @include('Includes.footer')
                </div>
            </div>
        </div>
    </div>

   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/solid.min.js" integrity="sha512-wabaor0DW08KSK5TQlRIyYOpDrAfJxl5J0FRzH0dNNhGJbeUpHaNj7up3Kr2Bwz/abLvVcJvDrJL+RLFcyGIkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <!-- Vuejs & Axios -->
    <script src="{{ asset('library/axios.min.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/bundle.js') }}"></script>
    <script src="{{ asset('template/js/default-assets/fullscreen.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('template/js/canvas.js') }}"></script>
    <script src="{{ asset('template/js/collapse.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/default-assets/active.js') }}"></script>

    <!-- Inject JS -->
    <script src="{{ asset('template/js/default-assets/apexchart.min.js') }}"></script>
    <script src="{{ asset('template/js/default-assets/apex-custom.js') }}"></script>
    <script src="{{ asset('template/js/default-assets/template-active.js') }}"></script>
    @yield('script')

</body>
</html>