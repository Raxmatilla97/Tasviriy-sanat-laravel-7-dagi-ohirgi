    
    @extends('makets.front.sayt')
    @section('sliders')
        <!-- ==========================
			///// Begin intro section /////
			===============================
			* Use classes "intro-xs", "intro-sm", "intro-lg" "intro-xlg" or "intro-full" to set intro size.
			* Use class "intro-full-m" to set intro size for small screens only.
			-->
			<section id="tt-intro" class="intro-full">
				<div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

					<!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
					====================================================================
					* Use class "nav-outside" for outside nav (requires boxed layout).
					* Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
					* Use class "nav-bottom-right" for bottom right nav.
					* Use class "nav-rounded" for rounded nav.
					* Use class "nav-light" to enable nav light style.
					* Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
					* Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
					* Use class "dots-rounded" for rounded dots.
					* Use class "owl-mousewheel" to enable mousewheel support.
					* Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
					* Use class "cc-hover-zoom" to enable carousel items hover effect.
					================================================================
					* Available carousel data attributes:
							data-items="5".......................(items visible on desktop)
							data-tablet-landscape="4"............(items visible on mobiles)
							data-tablet-portrait="3".............(items visible on mobiles)
							data-mobile-landscape="2"............(items visible on tablets)
							data-mobile-portrait="1".............(items visible on tablets)
							data-loop="true".....................(true/false)
							data-margin="10".....................(space between items)
							data-center="true"...................(true/false)
							data-start-position="0"..............(item start position)
							data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css') }}/)
							data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css') }}/)
							data-mouse-drag="false"..............(true/false)
							data-touch-drag="false"..............(true/false)
							data-autoheight="true"...............(true/false)
							data-autoplay="true".................(true/false)
							data-autoplay-timeout="5000".........(milliseconds)
							data-autoplay-hover-pause="true".....(true/false)
							data-autoplay-speed="800"............(milliseconds)
							data-drag-end-speed="800"............(milliseconds)
							data-nav="true"......................(true/false)
							data-nav-speed="800".................(milliseconds)
							data-dots="false"....................(true/false)
							data-dots-speed="800"................(milliseconds)
					-->
					<div class="owl-carousel cursor-grab bg-dark nav-bottom-right" data-lazy-load="true" data-items="1" data-loop="true" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="8000" data-animate-in="fadeIn" data-animate-out="fadeOut">

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-23.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption center">
										<h1 class="intro-title">What Are You Waiting For?</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-6.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption center">
										<h1 class="intro-title">Start Growing Your Business</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image owl-lazy" data-src="{{ ('front/assets/img/page-header/page-header-bg-17.jpg') }}">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-lg bottom-left parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption intro-caption-lg center">
										<h1 class="intro-title">Show Yourself to the World</h1>
										<h2 class="intro-subtitle">Build your beautiful portfolio website today!</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description">
											Aivo – is a complete HTML5 and CSS3 website template. It fits perfectly for freelancers, artists and design agencies. It looks great with all types of devices.
										</div>
										<!-- End intro-description -->

										<!-- Begin intro buttons -->
										<div class="intro-buttons">
											<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a> 
											<a href="home-full-screen-slideshow.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
										</div>
										<!-- End intro buttons -->

									</div> <!-- /.intro-caption -->
								</div> <!-- /.intro-caption-holder -->
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

					</div>
					<!-- End content carousel -->

				</div> <!-- /.tt-intro-inner -->
			</section>
			<!-- End intro section -->



    @endsection
    