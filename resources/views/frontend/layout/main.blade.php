<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title') || {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    {{-- vendors --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/Jquery-toast/jquery.toast.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-confirm/jquery-confirm.min.css') }}">
    {{-- Animated Modal --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/animated-modal/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animated-modal/css/normalize.min.css') }}">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @yield('push-style')
</head>
<body data-bs-theme="dark">
    
    <div class="app">
        @include('frontend.layout.Navbar')
        @yield('content')
    </div>


    
    
    <script src="{{ asset('assets/vendors/Jquery/Jquery.min.js') }}"></script>
    <script src="{{ asset('script.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/Jquery-toast/jquery.toast.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-confirm/jquery-confirm.min.js') }}"></script>
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/vendors/animated-modal/js/animatedModal.min.js') }}"></script>
    
    @yield('push-script')

    <script>

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 8,
            spaceBetween: 2,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Copy Text TO Clipboard
        function copyToClipboard(text) {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = window.location.href;
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            alert("URL Copied.");
        }

        // Create And Alert For Deleting Item
        $(document).on('click','.delete-item',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            var msg = $(this).data('msg') ?? "You won't be able to revert back!";
            $.confirm({
                draggable: true,
                title: 'Are You Sure!',
                content: msg,
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Delete',
                        btnClass: 'btn-red',
                        action: function(){
                                window.location.href = url;
                        }
                    },
                    close: function () {
                    }
                }
            });
        });
                
    </script>



</body>
</html>