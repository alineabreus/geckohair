<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>GeckoHair | @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    @include('layouts.header-mobile')
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    @include('layouts.menu-sidebar')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="form-header" action="" method="POST">
                            <h3>@yield('page-title')</h3>
                        </div>
                        <div class="header-button">
                            <div class="noti-wrap">
                                @include('layouts.messages')
                                @include('layouts.mails')
                                @include('layouts.notifications')
                            </div>
                            @include('layouts.profile')
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">@yield('in-page-title')</h2>
                            </div>
                        </div>
                    </div>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('page-content')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2022 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

<script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
<!-- end document-->
