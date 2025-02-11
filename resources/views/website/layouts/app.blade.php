<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> OFFSIDE - Home For Football </title> 
	
	<meta name="description" content="">
	<meta name="author" content="">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- **Favicon** -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
        <!-- **Font Awesome** -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"/>
    <!-- **CSS - stylesheets** -->
    <link id="default-css" href="{{ asset('website/root') }}/style.css" rel="stylesheet" media="all" />
    <link id="shortcodes-css" href="{{ asset('website/root') }}/shortcodes.css" rel="stylesheet" media="all" />
        
    <link id="skin-css" href="{{ asset('website') }}/skins/green/style.css" rel="stylesheet" media="all" />    
    
    <link id="fancy-box" href="{{ asset('website') }}/css/jquery.fancybox.css" rel="stylesheet" media="all" />
    <link href="{{ asset('website') }}/css/prettyPhoto.css" rel="stylesheet" media="all" />    
    <link id="layer-slider" href="{{ asset('website') }}/css/layerslider.css" rel="stylesheet" media="all" /> 
    
    <!-- **Additional - stylesheets** -->
    <link href="{{ asset('website') }}/css/responsive.css" rel="stylesheet" media="all" />
    <link href="{{ asset('website') }}/css/pace-theme-loading-bar.css" rel="stylesheet" media="all" />
        
    <link href="{{ asset('website') }}/css/animations.css" rel="stylesheet" media="all" />
    
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <!-- <link rel="{{ asset('website') }}/stylesheet" href="css/font-awesome.min.css">
    <link rel="{{ asset('website') }}/stylesheet" href="css/flaticon.css"> -->
    
    <!-- **Google - Fonts** -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel='stylesheet' type='text/css'>
    <style>
        .ls-nav-prev,
        .ls-nav-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        text-align: center;
        line-height: 40px;
        font-size: 24px;
        cursor: pointer;
        z-index: 1000;
        border-radius: 50%;
        transition: background-color 0.3s ease;
        }

        .ls-nav-prev:hover,
        .ls-nav-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        }

        .ls-nav-prev {
        left: 20px;
        }

        .ls-nav-next {
        right: 20px;
        }

        .ls-nav-prev::before {
        content: "‹";
        }

        .ls-nav-next::before {
        content: "›";
        }
     </style>
    <script type="text/javascript" src="{{ asset('website') }}/js/jquery.js"></script>
	<script type="text/javascript" src="{{ asset('website') }}/js/jquery-migrate.min.js"></script>

    <!-- **Modernizr** -->
	<script src="{{ asset('website') }}/js/modernizr.custom.js"></script>
    <script type="text/javascript">
	var mytheme_urls = {
 		stickynav : 'enable'
	};
	</script>
    </head>
<body>
	<!-- <div id="loader-wrapper">
    	<div class="loader">
        	<span class="fa fa-spinner fa-spin"></span>
        </div>
    </div> -->
	<!-- **Wrapper** -->
	<div class="wrapper">
    	<div class="inner-wrapper">
        	<!-- header-wrapper starts here -->
            @include('website.layouts.header')
            <!-- header-wrapper ends here -->
             @yield('content')

            <!-- footer starts here -->
            @include('website.layouts.footer')
            <!-- footer ends here -->
	</div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->

<!-- **jQuery** -->
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery-migrate.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script> -->

<script type="text/javascript" src="{{ asset('website') }}/js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.nicescroll.min.js"></script>

<script type="text/javascript" src="{{ asset('website') }}/js/pace.min.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="{{ asset('website') }}/js/jquery.tabs.min.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.ui.totop.min.js"></script>

<script type="text/javascript" src="{{ asset('website') }}/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/jquery.carouFredSel-6.2.1-packed.js"></script>

<script type="text/javascript" src="{{ asset('website') }}/js/jquery-transit-modified.js"></script> 
<script type="text/javascript" src="{{ asset('website') }}/js/layerslider.kreaturamedia.jquery.js"></script> 
<script type='text/javascript' src="{{ asset('website') }}/js/greensock.js"></script> 
<script type='text/javascript' src="{{ asset('website') }}/js/layerslider.transitions.js"></script> 


<!-- FullCalendar JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

<script type="text/javascript">var lsjQuery = jQuery;</script>
<!-- <script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_5','jquery'); } else { lsjQuery("#layerslider_5").layerSlider({responsiveUnder: 1240, layersContainer: 1170, skinsPath: '{{ asset('website') }}/js/layerslider/skins/'}) } }); </script> -->
<script type="text/javascript">
    lsjQuery(document).ready(function() {
        if (typeof lsjQuery.fn.layerSlider == "undefined") {
            lsShowNotice('layerslider_5', 'jquery');
        } else {
            lsjQuery("#layerslider_5").layerSlider({
                responsiveUnder: 1240,
                layersContainer: 1170,
                skinsPath: "{{ asset('website') }}/js/layerslider/skins/"
            });
        }
    });
</script>


<script type="text/javascript" src="{{ asset('website') }}/js/retina.js"></script>
<!-- <script type="text/javascript" src="{{ asset('website') }}/controlpanel.js"></script> -->

<script type="text/javascript" src="{{ asset('website') }}/js/twitter/jquery.tweet.min.js"></script>

<script type="text/javascript" src="{{ asset('website') }}/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('website') }}/js/custom.js"></script>
<script>
    jQuery(document).ready(function($) {
    // Previous button click
    $('.ls-nav-prev').on('click', function() {
        $('#layerslider_5').layerSlider('previous');
    });

    // Next button click
    $('.ls-nav-next').on('click', function() {
        $('#layerslider_5').layerSlider('next');
    });
});
</script>
</body>
</html>
