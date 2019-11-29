<!doctype html>
<html>
    <head>
        <title>CSC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <link rel="stylesheet"
            href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet"
            href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
        <link rel="stylesheet"
            href="{{asset('vendor/chartist/css/chartist-custom.css')}}">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="css/demo.css">
        <!-- GOOGLE FONTS -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"
            rel="stylesheet">
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96"
            href="{{asset('img/favicon.png')}}">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- LEFT SIDEBAR -->
            @include ('layout.partials.admin_nav')
            <!-- END LEFT SIDEBAR -->
            <!-- MAIN -->
            <div class="main">
                <!-- MAIN CONTENT -->

                <div class="container-fluid">

                    <!-- End of Topbar -->
                    @if ($errors->any())
                    @include ('partials.errors')
                    @endif
                    @if (!empty(session('success')))
                    @include ('partials.success')
                    @endif
                    <!-- Begin Page Content -->
                    @yield("content")


                </div>
                <!-- END MAIN CONTENT -->


            </div>
            <!-- END MAIN -->
            @include ('layout.partials.admin_footer')

        </body>

    </html>
