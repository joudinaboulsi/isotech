<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Static open graph for linkedIn -->
        <meta property="og:image" content="/images/og-image.jpg"/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />

        {!! SEO::generate() !!}
		
		<!-- Favicons
			================================================== -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/fonts/linearicon/style.css">
		<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
		
		<!-- Mobile Menu -->
		<link type="text/css" rel="stylesheet" href="/css/jquery.mmenu.all.css" />
		
		<!-- OWL CAROUSEL
			================================================== --> 
		<link rel="stylesheet" href="/css/owl.carousel.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="/revolution/css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
		<!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="/revolution/css/navigation.css">
		
		<!-- Main Style -->
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<div id="page">

		    @if(Session::has('msg'))
		    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
		        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		            <div class="modal-content">
		                <div class="modal-body">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                        <span aria-hidden="true">&times;</span>
		                    </button>
		                    <div class="row p-4">
		                        <p class="text-3 mb-0">Your message is well received. We will get back to you shortly.</p>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    @endif

			@include('layouts.header')

			@yield('content')

			@include('layouts.footer')

		</div>
		<!-- /page -->

		<a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a> 
		<!-- Back To Top -->

		<!-- SCRIPT -->
		<script src="/js/vendor/jquery.min.js"></script>
		<script src="/js/vendor/bootstrap.js"></script>
		<script src="/js/plugins/jquery.sticky-kit.min.js"></script>
		<script src="/js/plugins/jquery.waypoints.min.js"></script>
		
		<!-- Initializing the isotope
	    ================================================== --> 
	    <script src="/js/plugins/isotope.pkgd.min.js"></script>
	    <script src="/js/plugins/imagesloaded.pkgd.js"></script>
	    <script src="/js/plugins/custom-isotope.js"></script>
		
		<!-- Mobile Menu
			================================================== -->
		<script type="text/javascript" src="/js/plugins/jquery.mmenu.all.min.js"></script>
		<script type="text/javascript" src="/js/plugins/mobilemenu.js"></script>
		
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
		<script src="/js/plugins/slider-home-2.js"></script>
		
		<!-- Initializing Owl Carousel
			================================================== -->
		<script src="/js/plugins/owl.carousel.js"></script>
		<script src="/js/plugins/owl.js"></script>
		
		<!-- Initializing Counter Up
			================================================== -->
		<script src="/js/plugins/jquery.counterup.min.js"></script>
		<script src="/js/plugins/counterup.js"></script>
		
		<!-- Global Js
			================================================== --> 
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
		<script src="/js/plugins/template.js"></script>

		<!-- google captcha recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="/js/plugins/jquery.validate.min.js"></script>
		<script type="text/javascript">
		    $("#contact_form").validate({
		        ignore: ".ignore",     
		        // Rules for form validation
		        rules: 
		        {
		            hiddenRecaptcha: {
		                required: function () {
		                    if (grecaptcha.getResponse() == '') {
		                        return true;
		                    } else {
		                        return false;
		                    }
		                }
		            }
		        },

		        // Messages for form validation
		        messages:
		        {
		            hiddenRecaptcha:
		            {
		                required: "Please verify that you are a Human."
		            }
		        }

		    });
		    
	        $(window).on('load', function(){
	            $('#myModal').modal('show');
	        });
		</script>
	</body>

</html>