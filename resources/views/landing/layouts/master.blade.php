<!DOCTYPE html>
<!--
	Concept by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>TaxiVaxi</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="TaxiVaxi... Lets ride together">
    <meta name="Keywords" content="Cab management system, Taxi management system, TaxiVaxi, Business solution, Cab management, Taxi management, Vehicle management, Driver management, Client management">

    <meta name="robot" content="index,follow"/>
    <meta name="revisit-after" content="7 days"/>
    <meta name="language" content="en_us"/>
    <meta name="distribution" content="india"/>
    <meta name="expire" content="never"/>

    	<!-- Facebook and Twitter integration -->
  	<meta property="og:title" content=""/>
  	<meta property="og:image" content=""/>
  	<meta property="og:url" content=""/>
  	<meta property="og:site_name" content=""/>
  	<meta property="og:description" content=""/>
  	<meta name="twitter:title" content="" />
  	<meta name="twitter:image" content="" />
  	<meta name="twitter:url" content="" />
  	<meta name="twitter:card" content="" />

  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122583140-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122583140-1');
    </script>

  	<!-- Animate.css -->
  	<link rel="stylesheet" href="{{ URL::asset('landing/css/animate.css') }}">
  	<!-- Icomoon Icon Fonts-->
  	<link rel="stylesheet" href="{{ URL::asset('landing/css/icomoon.css') }}">
  	<!-- Bootstrap  -->
  	<link rel="stylesheet" href="{{ URL::asset('landing/css/bootstrap.css') }}">

  	<!-- Magnific Popup -->
  	<link rel="stylesheet" href="{{ URL::asset('landing/css/magnific-popup.css') }}">

  	<!-- Theme style  -->
  	<link rel="stylesheet" href="{{ URL::asset('landing/css/style.css') }}">

  	<!-- Modernizr JS -->
  	<script src="{{ URL::asset('landing/js/modernizr-2.6.2.min.js') }}"></script>
  </head>

  <body>
    <div class="fh5co-loader"></div>
    <div id="page">

      @yield('content')

      <footer id="fh5co-footer" role="contentinfo">
    		<div class="container">
    			<div class="row row-pb-md">
    				<div class="col-md-4 fh5co-widget ">
    					<h3>Fleet247.</h3>
    					<!-- <p style="color: #fdfdfd;">Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p> -->
    				</div>
    				<div class="col-md-6 col-sm-4 col-xs-6 col-md-push-1 ">
    					<ul class="fh5co-footer-links">
    					
    					</ul>
    				</div>
    			</div>

    			<div class="row copyright">
    				<div class="col-md-12 text-center">
    					<p>
    						<small class="block">&copy; 2018 All Rights Reserved.</small>
    					</p>
    					<!-- <p>
    						<ul class="fh5co-social-icons">
    							<li><a href="#"><i class="icon-twitter"></i></a></li>
    							<li><a href="#"><i class="icon-facebook"></i></a></li>
    							<li><a href="#"><i class="icon-linkedin"></i></a></li>
    						</ul>
    					</p> -->
    				</div>
    			</div>
    		</div>
    	</footer>
  	</div>

  	<div class="gototop js-top">
  		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  	</div>

  	<!-- jQuery -->
  	<script src="{{ URL::asset('landing/js/jquery.min.js') }}"></script>
  	<!-- jQuery Easing -->
  	<script src="{{ URL::asset('landing/js/jquery.easing.1.3.js') }}"></script>
  	<!-- Bootstrap -->
  	<script src="{{ URL::asset('landing/js/bootstrap.min.js') }}"></script>
  	<!-- Waypoints -->
  	<script src="{{ URL::asset('landing/js/jquery.waypoints.min.js') }}"></script>
  	<!-- countTo -->
  	<script src="{{ URL::asset('landing/js/jquery.countTo.js') }}"></script>
  	<!-- Magnific Popup -->
  	<script src="{{ URL::asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
  	<script src="{{ URL::asset('landing/js/magnific-popup-options.js') }}"></script>
  	<!-- Stellar -->
  	<script src="{{ URL::asset('landing/js/jquery.stellar.min.js') }}"></script>
  	<!-- Main -->
  	<script src="{{ URL::asset('landing/js/main.js') }}"></script>
  </body>
</html>
