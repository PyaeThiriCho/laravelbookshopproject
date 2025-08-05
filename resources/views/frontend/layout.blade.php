<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('frontend_asset/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        @include('frontend.parts.nav');
       
        @yield('content')

        <!-- Footer-->
        @include('frontend.parts.footer');

        <!-- JQuery core JS-->
        <script src="{{asset('frontend_asset/js/jquery-3.7.1.min.js')}}"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
            <script src="{{asset('frontend_asset/js/scripts.js')}}"></script>
            
        <!-- Cart custom JS-->
        <script src="{{asset('frontend_asset/js/cart.js')}}"></script>
    </body>
</html>

@yield('script')
