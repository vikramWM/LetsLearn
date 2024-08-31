<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Let's Learn Together</title>
		@include('layouts-backend.css')
	</head>
    
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                @include('layouts-backend.aside')
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        @include('layouts-backend.header')
                        @include('layouts-backend.flash')


                        @yield('content')

                        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        @include('layouts-backend.footer')
                        </div>
                    </div>
            </div>
        </div>

        @include('layouts-backend.js')
        @include('layouts-backend.themebuttons')
       
</body>
</html>
