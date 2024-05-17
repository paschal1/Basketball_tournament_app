<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BasketBall Tournament') }}</title>
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('./images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Form step -->
    <link href="{{asset('admin/vendor/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{ asset('admin/vendor/summernote/summernote.css')}}" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include("layouts.inc.navbar")
        @include("layouts.inc.sidenavbar")
        @yield("content")
        @include("layouts.inc.footer")
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @yield("script")
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/js/quixnav-init.js') }}"></script>
    <script src="{{asset('admin/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{asset('admin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{asset('admin/vendor/morris/morris.min.js') }}"></script>


    <script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{asset('admin/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('admin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('admin/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{asset('admin/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{asset('admin/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{asset('admin/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{asset('asset/js/plugins-init/jquery.validate-init.js')}}"></script>


    <!-- Summernote init -->
    <script src="{{asset('admin/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{asset('admin/js/plugins-init/summernote-init.js')}}"></script>

    <!-- Form step init -->
    <script src="{{asset('admin/js/plugins-init/jquery-steps-init.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("{{session('status')}}");
    </script>
    @endif
</body>

</html>
