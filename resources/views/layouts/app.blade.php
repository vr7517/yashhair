
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Yash Hair</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Yash Hair Petch Studio" name="keywords">
        <meta content="Yash Hair Petch Studio" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS Libraries -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/lightbox.min.css')}}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            @include('layouts.top-header')
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            @include('layouts.header')
        </div>
        <!-- Nav Bar End -->

        @yield('style')
		@yield('content')
		@yield('script')

        <!-- Footer Start -->
        <div class="footer">
            @include('layouts.footer')
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script data-cfasync="false" src="{{asset('assets/js/email-decode.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        
        <script src="{{asset('assets/js/easing.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/lightbox.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{asset('assets/js/jqBootstrapValidation.min.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/contact.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}" type="ae0e775bfb95c0948200390b-text/javascript"></script>
        <script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="ae0e775bfb95c0948200390b-|49" defer></script></body>
</html>
