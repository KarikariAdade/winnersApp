<!doctype html>
<html lang="en" dir="ltr">
 <head>

        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>winnersApp</title>

        <!-- BOOTSTRAP CSS -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet"/>

        <!-- SIDE-MENU CSS -->
        <link href="{{ asset('assets/css/sidemenu.css') }}" rel="stylesheet">

        <!-- SINGLE-PAGE CSS -->
        <link href="{{ asset('assets/plugins/single-page/css/main.css') }}" rel="stylesheet" type="text/css">

        <!--C3 CHARTS CSS -->
        <link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

        <!-- P-scroll bar css-->
        <link href="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css') }}" />

    </head>

    <body>
                            <div class="clearfix"></div>

        <!-- BACKGROUND-IMAGE -->
        <div class="login-img">

            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="../../assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- /GLOABAL LOADER -->

            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto">
                        <div class="text-center">
                            <img src="../../assets/images/brand/logo.png" class="header-brand-img" alt="">
                        </div>
                    </div>
                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                                 <form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
                        @csrf
                                <span class="login100-form-title">
                                    Login
                                </span>
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input type="text" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <input type="password" placeholder="Password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                                <div class="text-right pt-1">
                                     @if (Route::has('password.request'))
                                    <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ml-1">Forgot Password?</a></p>
                                     @endif
                                </div>
                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Not a member?<a href="{{ route('register') }}" class="text-primary ml-1">Sign UP now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

<!-- RATING STARJS -->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- CHARTJS CHART JS-->
<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- ECHART JS-->
<script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- APEXCHART JS -->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

<!-- INDEX JS -->
<script src="{{ asset('assets/js/index1.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>