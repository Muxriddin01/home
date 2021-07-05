<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('themes/srtdash/assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/srtdash/assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('themes/srtdash/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    {{-- <a href="{{ route('admin.dashboard') }}">Онлайн-Бухгалтерия</a> --}}
                    <h3 style="color: white">Онлайн Бухгалтерия</h3>
                </div>
            </div>
            @include('panels.main-menu')
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            @include('inc.header')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route('admin.reports.index') }}">Home</a></li>
                                <li><span>@yield('title')</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            @yield('content')
            
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    @include('inc.footer')

</body>

</html>
