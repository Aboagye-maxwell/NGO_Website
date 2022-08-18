<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/css/app.css',
    'resources/css/bootstrap.css',
    'resources/css/bootstrap.js',
    'resources/js/jquery.js',
    'resources/js/popper.min.js',
    'resources/js/max.js',
    'resources/css/max.css'
    ])
</head>
<body id="app_1">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Woman 360 Community') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('support')}}">Support Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('event')}}">Events</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <button class="btn btn-info">Donate</button>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        {{--        floating up button--}}
        <a href="#">
            <div class="chart_1 d-flex justify-content-center align-items-center">
                <i class="fa fa-angle-up"></i>
            </div>
        </a>

{{--        floating message button --}}
        <a href="#">
            <div class="chart d-flex justify-content-center align-items-center">
                <i class="fa fa-comment-o"></i>
            </div>
        </a>

    <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left p-5">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 mt-md-0 mt-3">

                        <!-- Content -->
                        <h4 class="text-uppercase bo">Max Visuals</h4>
                        <p id="mid" class="pt-2">Here you can use rows and columns to organize your footer content jbiusdubsnd u b audbuadn dbudb udusudbsubduyb
                            ydgy sdysdsdbsy dsdbudu doudusb.</p>
{{--                        contacts --}}
                        <div class="pt-3">
{{--                            email--}}
                            <div class="d-flex">
                                <h6>Email:</h6>
                                <p>maxwellaboagye13@gmail.com</p>
                            </div>
                            {{--                        phone--}}
                            <div class="d-flex">
                                <h6>Phone:</h6>
                                <p>+2330501588158</p>
                            </div>
                            {{--                        charity--}}
                            <div class="d-flex">
                                <h6>Registered Charity:</h6>
                                <p>+2330249141640</p>
                            </div>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-6 mb-md-0 mb-3 p-5">

                        <!-- Links -->
                        <h5 class="text-uppercase bo">get monthly updates</h5>

                        <!-- Form -->
                        <form action="#" method="#">
                            <div class="form-group">
                                <label for="email">Enter your email here*</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div type="submit" class="btn btn-outline-danger pl-5 pr-5 d-flex justify-content-center align-items-center">Sign Up!</div>
                        </form>
                        <!-- Form -->


                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3 p-5">

                        <!-- Links -->
                        <h5 class="text-uppercase bo">Quick Links</h5>

                        <ul class="list-unstyled ca">
                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li>
                                <a href="{{route('support')}}">Support Us</a>
                            </li>
                            <li>
                                <a href="{{route('news')}}">News</a>
                            </li>
                            <li>
                                <a href="{{route('event')}}">Events</a>
                            </li>

                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="background-color: rgb(33, 62, 140);color: white;
                font-size: 14px;">© <script>document.write(new Date().getFullYear());</script> Copyright:
                <a style="text-decoration: none;color: white;" href=" https://maxvisual.000webhostapp.com/"> MaxVisuals </a> Team HTML <span>Validation | <a
                        style="text-decoration: none;color: white;" href="#">Terms of Use</a>  | <a style="text-decoration: none;color: white;" href="#">Privacy Policy</a></span>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->




    </div>
</body>
</html>
