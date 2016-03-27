<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Brand</title>
<link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/startbootstrap-sb-admin-2/dist/css/timeline.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('client/css/backend.css') }}" rel="stylesheet">
</head>
<body>
    @yield('container')

    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('client/js/backend.js') }}"></script>
</body>
</html>
