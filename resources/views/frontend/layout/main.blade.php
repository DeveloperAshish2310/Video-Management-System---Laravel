<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title') || {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    @yield('push-style')
</head>
<body data-bs-theme="dark">
    
    <div class="app">
        @yield('content')
    </div>


    @yield('push-script')
    
    
    <script src="{{ asset('script.js') }}"></script>
    <script src="{{ asset('assets/vendors/Jquery/Jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>