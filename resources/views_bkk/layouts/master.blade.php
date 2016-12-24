<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title> 
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Roker  - Corporate, Creative, Multi Purpose, Responsive And Retina Template">
    <meta name="author" content="iwthemes.com">   

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Theme CSS -->
      <link href="css/style.css" rel="stylesheet" media="screen">
      <link href="css/chat.css" rel="stylesheet" media="screen">

    <!-- Skins Theme -->
    <link href="#" rel="stylesheet" media="screen" class="skin">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

    <!-- Head Libs -->
    <script src="js/modernizr.js"></script>

    <!--[if lte IE 9]>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
        <script src="js/responsive/respond.js"></script>
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen" />            
    <![endif]-->

    <!-- Skins Changer-->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

	@yield('style')
</head>

<body>
<div id="wrapper">

	@yield('navbar')

	<div class="container">
		@yield('content')
        @include ('layouts.footer')

	</div>
 <!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <!-- jQuery local-->    
    <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>    
    <!--Nav-->
    <script type="text/javascript" src="js/nav/tinynav.js"></script> 
    <script type="text/javascript" src="js/nav/superfish.js"></script>  
    <script type="text/javascript" src="js/nav/hoverIntent.js"></script>  
    <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>                                          
    <!--Totop-->
    <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
    <!--Slide-->
    <script type="text/javascript" src="js/slide/camera.js" ></script>      
    <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>  
    <!--FlexSlider-->
    <script src="js/flexslider/jquery.flexslider.js"></script> 
    <!--Ligbox--> 
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
    <!-- carousel.js-->
    <script src="js/carousel/carousel.js"></script>  
    <!-- Twitter Feed-->
    <script src="js/twitter/jquery.tweet.js"></script> 
    <!-- flickr Feed-->
    <script src="js/flickr/jflickrfeed.min.js"></script>  
    <!--Scroll-->   
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Nicescroll -->
    <script src="js/scrollbar/jquery.nicescroll.js"></script>
    
    <!-- Maps -->
    <script src="js/maps/gmap3.js"></script>
    <!-- Filter -->
    <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
    <!--Theme Options-->
    <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>                               
    <!-- Bootstrap.js-->
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    <!--MAIN FUNCTIONS-->
    <script type="text/javascript" src="js/main.js"></script>
    <!-- ======================= End JQuery libs =========================== -->

     <script src="{{URL::asset('assets/jquery-ui.min.css')}}"></script>
    <script src="{{URL::asset('assets/jquery-ui.min.js')}}"></script>

@yield('scripts')

</body>
</html>
