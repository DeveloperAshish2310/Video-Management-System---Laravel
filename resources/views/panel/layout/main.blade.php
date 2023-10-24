<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="keywords" content="meta_keywords">
    <meta name="author" content="{{ env('AUTHOR_NAME') }}">
    <meta name='subject' content='Streaming'>
    <meta name='author_email' content='{{ env('AUTHOR_EMAIl') }}'>
    <meta name='language' content='IN'>
    <meta name='topic' content='Entertainment'>
    <meta name='designer' content='{{ env('AUTHOR_NAME') }}'>
    <meta name='owner' content='{{ env('SITE_OWNER') }}'>
    <meta name='url' content='{{ env('APP_URL') }}'>
    <meta name="og:title" content="{{ env('APP_NAME') }}" />
    <meta name="og:type" content="" />
    <meta name="og:url" content="{{ env('APP_URL') }}" />
    <meta name="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta name="og:description" content="{{ env('APP_DESCRIPTION') }}" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@stack('title') | {{ env('APP_NAME') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagify/tagify@4.17.8_dist_tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/JqueryToaster/jquery.toast.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/switchery/switchery.css') }}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/external.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    @yield('push-head')

</head>

<body>


    <div class="container-scroller">
        {{-- navabr --}}
        @include('panel.layout.navbar')
        <div class="container-fluid page-body-wrapper">
            {{-- headnav --}}
            @include('panel.layout.head')

            {{-- partial --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    
                    @yield('content')
                    
                </div>
            </div>
            {{-- partial --}}
        </div>
        {{-- main-panel ends --}}
    </div>
    {{-- page-body-wrapper ends --}}
</div>

<!-- container-scroller -->
@yield('push-script')


<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tagify/tagify@4.17.8_dist_tagify.min.js') }}"></script>
<script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendors/switchery/switchery.js') }}"></script>

<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<script src="{{ asset('assets/js/addshow.js') }}"></script>
<script src="{{ asset('assets/js/episodes.js') }}"></script>
<script src="{{ asset('assets/js/tagify.js') }}"></script>
<script src="{{ asset('assets/js/file-upload.js') }}"></script>
<script src="{{ asset('assets/js/ashish.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/js/switchery.js') }}"></script>
<script src="{{ asset('assets/vendors/JqueryToaster/jquery.toast.js') }}"></script>
<!-- endinject -->

<!-- Ajax Search Engine -->
<script src="{{ asset('assets/js/ajax-search.js') }}"></script>
<!-- Custom js for this page -->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->



</body>
</html>
