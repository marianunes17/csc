<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CSC | @yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet"
            href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

        <!-- Font Awesome CSS-->
        <link rel="stylesheet"
            href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <!-- Google fonts - Roboto-->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <!-- Bootstrap Select-->
        <link rel="stylesheet"
            href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
        <!-- owl carousel-->
        <link rel="stylesheet"
            href="{{asset('vendor/owl.carousel/assets/owl.carousel.css')}}">
        <link rel="stylesheet"
            href="{{asset('vendor/owl.carousel/assets/owl.theme.default.css')}}">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{asset('css/style.default.css')}}"
            id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}"
            type="image/x-icon">

        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>


    <body>

        @include ('layout.partials.header')

        @include ('layout.partials.nav')

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="cta-inner rounded">

                            @yield("content")

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include ('layout.partials.footer')

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>

</html>
