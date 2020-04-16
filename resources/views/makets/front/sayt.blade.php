
<!DOCTYPE html>

<!--
   Template:   Multipurpose Portfolio HTML Website Template
   Author:     Raxmatilla Fayziyev TSMG-18/1 
   URL:         https://cspi.uz
   Agar siz bu yozuvni o'qigan bo'lsangiz sahifani eng so'ngidagi gapniham o'qing.
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Aivo - Multipurpose Portfolio HTML Website Template</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive multipurpose portfolio HTML website template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, Multipurpose, Portfolio, Template, Theme, Website, Themetorium" />
		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet"> <!-- Global font -->

		<!-- Bootstrap 3 CSS (https://getbootstrap.com/docs/3.3/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/animsition/css/animsition.min.css') }}"> <!-- Animsition CSS (http://git.blivesta.com/animsition/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/fontawesome/css/fontawesome-all.min.css') }}"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/linearicons/style.css') }}"> <!-- Linearicons CSS (https://linearicons.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}"> <!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}"> <!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/animate.css') }}"> <!-- Animate CSS (https://daneden.github.io/animate.css') }}/) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css') }}"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<link rel="stylesheet" href="{{ ('front/assets/vendor/lightgallery/css/lightgallery.min.css') }}"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Theme master CSS -->
		<link rel="stylesheet" type='text/css' href="{{ ('front/assets/css/helper.css') }}">
		<link rel="stylesheet" type='text/css' href="{{ ('front/assets/css/theme.css') }}">


		<!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
		<![endif]-->

	</head>

	
	<!-- ===========
	///// Body /////
	================
	* Use class "animsition" to enable page transition while page loads.
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	-->
	<body id="body" class="animsition tt-boxed">


		<!-- =================
		//// Begin header //// 
		======================
		* Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
		* Use class "header-fixed-top" to set header to fixed position.
		* Use class "header-transparent" to set header to transparent.
		* Use class "header-transparent-dark" to enable transparent dark header (use it for light background). Note: class "header-transparent" is required!
		* Use class "menu-align-left" to align menu to left.
		* Use class "menu-align-right" to align menu to right.
		* Use class "menu-align-center" to align menu to center (do not use with header classes!).
		-->
		<header id="header" class="header-show-hide-on-scroll header-transparent menu-align-right">

			<!-- Begin header inner -->
			<div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

				<!-- Begin logo 
				================ -->
				<div id="logo">
					<!-- logo images for big screens -->
					<a href="index.html" class="logo-dark"><img src="{{ ('front/assets/img/logo-dark.png') }}" alt="logo"></a>
					<a href="index.html" class="logo-light"><img src="{{ ('front/assets/img/logo-light.png') }}" alt="logo"></a>

					<!-- logo images for smaller screens -->
					<a href="index.html" class="logo-dark-m"><img src="{{ ('front/assets/img/logo-dark-m.png') }}" alt="logo"></a>
					<a href="index.html" class="logo-light-m"><img src="{{ ('front/assets/img/logo-light-m.png') }}" alt="logo"></a>
				</div>
				<!-- End logo -->

				<!-- Begin header attributes (add/remove class "hide" to enable/disable header attributes without removing the code).
				============================= -->
				<div class="header-attributes">
					<ul>

						<!-- Begin header attributes search (clobal search) 
						==================================================== -->
						<li>
							<a href="home-full-screen-slideshow.html#" class="h-attr-search-trigger"><i class="fas fa-search"></i></a>
							<div class="h-attr-search">
								<div class="h-attr-search-inner">
									<p class="h-attr-search-text">Search</p>
									<form id="h-attr-search-form" class="form-btn-inside" method="get" action="search-results.html">
										<input type="text" id="h-attr-search-input" name="search" placeholder="Type your keywords ...">
										<button type="submit"><i class="fas fa-search"></i></button>
									</form>
									<div class="h-attr-search-suggestions">
										<h3 class="h-attr-search-sugg-title">- May We Suggest?</h3>
										<!-- Random or most used tags. Note: maximum 20 suggestions/tags! -->
										<p><a href="home-full-screen-slideshow.html">#love</a> <a href="home-full-screen-slideshow.html">#funny</a> <a href="home-full-screen-slideshow.html">#gifs</a> <a href="home-full-screen-slideshow.html">#print</a> <a href="home-full-screen-slideshow.html">#digital</a> <a href="home-full-screen-slideshow.html">#motion</a> <a href="home-full-screen-slideshow.html">#hilarious</a> <a href="home-full-screen-slideshow.html">#good</a> <a href="home-full-screen-slideshow.html">#super</a> <a href="home-full-screen-slideshow.html">#portfolio</a> <a href="home-full-screen-slideshow.html">#blog</a> <a href="home-full-screen-slideshow.html">#funny</a> <a href="home-full-screen-slideshow.html">#branding</a> <a href="home-full-screen-slideshow.html">#yesyes</a> <a href="home-full-screen-slideshow.html">#concept</a> <a href="home-full-screen-slideshow.html">#colored</a> <a href="home-full-screen-slideshow.html">#fancy</a> <a href="home-full-screen-slideshow.html">#effects</a> <a href="home-full-screen-slideshow.html">#experimental</a> <a href="home-full-screen-slideshow.html">#photoshop</a></p>
									</div>
								</div> <!-- /.h-attr-search-inner -->
								<div class="h-attr-search-close"><i class="tt-close-btn tt-close-light"></i> <span>Close</span></div>
							</div> <!-- /.h-attr-search -->
						</li>
						<!-- End header attributes search -->

						<!-- Begin header attributes dropdown (languages)
						==================================================
						* Use class "h-attr-dropdown-dark" to enable dropdown dark style.
						* Use class "h-attr-dropdown-color" to enable dropdown colored style.
						-->
						<li class="h-attr-dropdown-wrap h-attr-dropdown-master h-attr-lang h-attr-dropdown-dark h-attr-dropdown-right">
							<a href="home-full-screen-slideshow.html#0"><img src="{{ ('front/assets/img/flags/gb.png') }}" alt="English">EN</a>
							<ul class="h-attr-dropdown">
								<li><a href="home-full-screen-slideshow.html" title="English"><img src="{{ ('front/assets/img/flags/gb.png') }}" alt="English">EN</a></li>
								<li><a href="home-full-screen-slideshow.html" title="French"><img src="{{ ('front/assets/img/flags/fr.png') }}" alt="French">FR</a></li>
								<li><a href="home-full-screen-slideshow.html" title="Deutsch"><img src="{{ ('front/assets/img/flags/de.png') }}" alt="Deutsch">DE</a></li>
							</ul> <!-- /.h-attr-dropdown -->
						</li>
						<!-- End header attributes dropdown -->

						<!-- Begin header attributes side panel holder 
						=============================================== -->
						<li>
							<!-- Begin header attributes side panel trigger -->
							<a href="home-full-screen-slideshow.html" id="h-attr-side-panel-trigger">
								<span class="hide-from-md"><i class="fas fa-bars"></i></span>
								<span class="hide-to-md"><i class="fas fa-ellipsis-v"></i></span>
							</a>
							<!-- End header attributes side panel trigger -->

							<!-- Begin header attributes side panel -->
							<div id="h-attr-side-panel">
								<div class="h-attr-side-panel-inner">
									<div class="h-attr-side-panel-close"><i class="tt-close-btn tt-close-light"></i></div>

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget sp-text-box">
										<h4>- Aditional Info</h4>
										<p>Doloremque necessitatibus eius assumenda, voluptatum eos reprehenderit iusto nampus etmo namis!</p>

										<p>Consectetur adipisicing elit. Fugiat dolorum cum soluta quidem, eos saepe. Veritatis cum quia officiis tenetur omnis eaque it doloremque necessit: <a target="_blank" href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium">https://themeforest.net</a></p>
									</div>
									<!-- End header attributes side panel widget -->

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget">
										<a target="_blank" href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary btn-block">Buy This Template!</a>
										<p class="margin-top-15 small">Enimat illum atera ates expedita obcaecati atque.</p>
									</div>
									<!-- End header attributes side panel widget -->

									<!-- Begin header attributes side panel widget -->
									<div class="h-attr-side-panel-widget">

										<h5>Instagram:</h5>
										
										<!-- Begin thumbnail list 
										==========================
										* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
										* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
										-->
										<ul class="thumb-list col-4 gutter-3">
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-1.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-2.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-3.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-4.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-5.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-6.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-7.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-8.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-9.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-10.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-11.jpg') }}"></a></li>
											<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image lazy" data-src="{{ ('front/assets/img/thumb-list/img-12.jpg') }}"></a></li>
										</ul>
										<!-- End thumbnail list -->

									</div>
									<!-- End header attributes side panel widget -->

								</div> <!-- /.h-attr-side-panel-inner -->
							</div>
							<!-- End header attributes side panel -->

						</li>
						<!-- End header attributes side panel holder -->

						<!-- Begin mobile menu toggle button (tt-main-menu) -->
						<li>
							<div id="tt-m-menu-toggle-btn">
								<span></span>
							</div>
						</li>
						<!-- End mobile menu toggle button -->

						<!-- Begin header attributes button (disabled on smaller screens!) -->
						<li class="hide-from-md">
							<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="h-attr-button" target="_blank">Buy<span class="hide-from-lg"> This Theme</span>!</a>
						</li>
						<!-- End header attributes button -->
					</ul>
				</div>
				<!-- End header attributes -->


				<!-- ====================
				//// Begin main menu ////
				===================== -->


				@yield('navigation')
            
			    <!-- End main menu -->

			</div>
			<!-- End header inner -->

		</header>
		<!-- End header -->



		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->

		<div id="body-content">
          @yield('content')
		</div>
		<!--  End body content  -->


        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="{{ ('front/assets/vendor/jquery/jquery.min.js') }}"></script> <!--- jQuery JS (https://jquery.com) -->
		<script src="{{ ('front/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- Bootstrap 3 JS (https://getbootstrap.com/docs/3.3/) -->

		<!-- Libs and Plugins JS -->
		<script src="{{ ('front/assets/vendor/animsition/js/animsition.min.js') }}"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
		<script src="{{ ('front/assets/vendor/jquery.easing.min.js') }}"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="{{ ('front/assets/vendor/isotope.pkgd.min.js') }}"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="{{ ('front/assets/vendor/imagesloaded.pkgd.min.js') }}"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="{{ ('front/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel JS (http://www.owlcarousel.owlgraphic.com) -->
		<script src="{{ ('front/assets/vendor/jquery.mousewheel.min.js') }}"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="{{ ('front/assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js') }}"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<script src="{{ ('front/assets/vendor/jquery.dotdotdot.js') }}"></script> <!-- jQuery.dotdotdot JS (more info: https://github.com/FrDH/jQuery.dotdotdot) -->
		<script src="{{ ('front/assets/vendor/jquery.waypoints.min.js') }}"></script> <!-- Waypoints JS (more info: https://github.com/imakewebthings/waypoints) -->
		<script src="{{ ('front/assets/vendor/jquery.counterup.min.js') }}"></script> <!-- Count-Up JS (more info: https://github.com/ciromattia/jquery.counterup) -->
		<script src="{{ ('front/assets/vendor/lightgallery/js/lightgallery.min.js') }}"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="{{ ('front/assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="{{ ('front/assets/vendor/jquery-lazy/js/jquery.lazy.min.js') }}"></script> <!-- jqueryLazy JS (http://jquery.eisbehr.de/lazy/) -->
		<script src="{{ ('front/assets/vendor/jquery-lazy/js/jquery.lazy.plugins.min.js') }}"></script> <!-- jqueryLazy Plugins JS (http://jquery.eisbehr.de/lazy/) -->

		<!-- Theme master JS -->
		<script src="{{ ('front/assets/js/theme.js') }}"></script>



		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->


		<!-- Global site tag (gtag.js') }}) - Google Analytics -->
        
        <!-- CODE BU YERGA QO'YILADI -->

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>
<!-- 


Haa manashu gapni nazarda tutgandim....

Siz shu yergaham ahamiyat bergan ekansiz demak siz sinchikovsiz.
Manga esa sinchikov odamlar umuman yoqmaydi shu sabab tezgina saytdan chiqib ketishingizni maslahat berardim.

Agar sayt qaysi CMS da qilingani sizni qiziqtirsa, homtama bo'lmang bu sayt Frameworkda qilingan qaysiligini esa o'ziz toping. 

-->
</html>