<!DOCTYPE html>
<head>
    <title>{{ __('message.quicktask') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"></script>

     <!-- Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!--sidebar start-->
        @include('layouts.header')
        <!--sidebar start-->

        <!--sidebar start-->
        @include('layouts.sidebar')
        <!--sidebar end-->

        <!--Main content start-->
        @yield('main-content')
        <!--Main content end-->
    </div>

    <!-- jQuery -->
    <script src="{{ asset('bower_components/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('bower_components/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('bower_components/adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('bower_components/adminlte/dist/js/demo.js') }}"></script>
    <script src="{{ asset('js/home.js') }}" type="text/javascript"></script>
</body>

</html>
