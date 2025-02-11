<!DOCTYPE html>
<html lang="en">

<head>
    <title>OFFSIDE | Home of Football</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <!-- <link rel="icon" href="{{ asset('dashboard') }}/files/assets/images/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="{{ asset('dashboard') }}/files/assets/images/offside_logo_02.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/files/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard') }}/files/assets/css/jquery.mCustomScrollbar.css">
</head>
<!-- Menu sidebar static layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('backend.admin.layouts.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                @include('backend.admin.layouts.sidebar')
                    <div class="pcoded-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ asset('dashboard') }}/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ asset('dashboard') }}/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ asset('dashboard') }}/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ asset('dashboard') }}/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ asset('dashboard') }}/files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/bower_components/chart.js/dist/Chart.js"></script>
    <!-- Google map js -->
    <script
        src="../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/assets/pages/google-maps/gmaps.js"></script>
    <!-- gauge js -->
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/gauge/gauge.min.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/amchart/serial.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/amchart/gauge.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/amchart/pie.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/pages/widget/amchart/light.js"></script>
    <!-- Custom js -->
    <script src="{{ asset('dashboard') }}/files/assets/js/pcoded.min.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/js/vartical-layout.min.js"></script>
    <script src="{{ asset('dashboard') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/assets/pages/dashboard/crm-dashboard.min.js"></script>
    <script type="text/javascript" src="{{ asset('dashboard') }}/files/assets/js/script.js"></script>
</body>

</html>