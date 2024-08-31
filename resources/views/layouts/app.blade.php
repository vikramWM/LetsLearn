<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5MLD9YXWCH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5MLD9YXWCH');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{$data['title']}}</title>
	<meta name="description" content="{{$data['description']}}" />
    <!-- Include CSS -->
    @include('layouts.css')
    
    <!-- Include Scripts -->
    <style>
        
        @media screen and (max-width: 768px) {
            .whatsapp_float {
                position: fixed;
                text-align: right;
                bottom: 60px;
                z-index: 25;
            }
            .whatsapp_float_btn {
                max-width: 35%; /* Adjust width for smaller screens */
            }
        }
        @media screen and (min-width: 768px) {
            .whatsapp_float {
                position: fixed;
                text-align: right;
                bottom: 60px;
                z-index: 25;
            }
            .whatsapp_float_btn {
                max-width: 10%; /* Adjust width for smaller screens */
            }
        }
    </style>
</head>
<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    
    <!-- Scroll to Top Button -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </div>
    <div class="whatsapp_float">
        <a  href="https://wa.me/442081339423" target="_blank"><img src="images/WhatsApp.png" alt="WhatsApp" class="whatsapp_float_btn"/></a>
    </div>
    <!-- Include JavaScript -->
    @include('layouts.js')
    <script src="//code.tidio.co/lsmjw2jxaupiecbizinxn0pfeshjqoff.js" async></script>
</body>
</html>
