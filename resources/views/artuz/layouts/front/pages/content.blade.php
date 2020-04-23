     @extends('artuz.layouts.makets.front.sayt')
       @section('content')
           
    
		


    <!-- Begin sliders section  -->

		@yield('sliders')
			
	<!-- End intro section -->




	<!-- Begin services section  -->

        @yield('info-intro')

    <!-- End services section  -->


		
           <style>
		   
</style>

		

    <!-- Element cover  -->
 
        @yield('info-banner')
 
    <!-- End element cover  --> 





  <!--  Blog yangilik, elon va boshqa yangiliklar qismi -->
  
		@yield('articles')
		
  <!-- tugadi -->




	<!-- ikkinchi bo'limlar info-grammasi -->	   

	    @yield('info-2-gramma')

	<!-- info gramma tugadi -->




    <!-- Gallereya qismi boshlandi-->

        @yield('gallereya')

    <!-- Gallereya qismi tygadi-->


    <!-- Gallereya qismi boshlandi-->

        @yield('video-section')

     <!-- Gallereya qismi tygadi-->

        
           
            
            
         <!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed. 
			-->
			<section id="footer" class="no-margin-top">
				<div class="footer-inner">
					<div class="footer-container tt-wrap">
						<div class="row">
							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (logo) -->
								<div class="footer-block">
									<div class="f-block-logo">
										<!-- logo images for big screens -->
										<a href="index.html" class="logo-dark"><img src="{{ ('front/assets/img/logo-dark.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light"><img src="{{ ('front/assets/img/logo-light.png') }}" alt="logo"></a>

										<!-- logo images for smaller screens -->
										<a href="index.html" class="logo-dark-m"><img src="{{ ('front/assets/img/logo-dark-m.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light-m"><img src="{{ ('front/assets/img/logo-light-m.png') }}" alt="logo"></a>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (links) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Menu</h4>
									<ul class="f-block-links">
										<li><a href="about-us.html">About</a></li>
										<li><a href="portfolio-grid-1.html">Portfolio</a></li>
										<li><a href="blog-list-classic.html">Blog</a></li>
										<li><a href="page-faq-sidebar-right.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (social) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Follow</h4>
									<ul class="f-block-links">
										<li><a href="https://www.facebook.com/themetorium" target="_blank">Facebook</a></li>
										<li><a href="https://twitter.com/Themetorium" target="_blank">Twitter</a></li>
										<li><a href="https://plus.google.com/+SiiliOnu" target="_blank">Google+</a></li>
										<li><a href="https://www.behance.net/Themetorium" target="_blank">Behance</a></li>
										<li><a href="https://dribbble.com/Themetorium" target="_blank">Dribbble</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Contact</h4>
									<div class="f-block-text">
										<p>121 King Street, Melbourne, Australia</p>
										<p>+123 456 789 000<br>
										<a href="mailto:info@youremail.com">info@youremail.com</a></p>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">About</h4>
									<div class="f-block-text padding-right-30">
										Sed non auctor magna. Nunc eu ultrices orci. Donec commodo ligula in massa ultricies volutpat. Fusce vel cursus lectus.
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.footer-container -->

					<!-- Begin footer bottom -->
					<div class="footer-bottom">
						<div class="footer-container tt-wrap">
							<div class="row">
								<div class="col-md-6">

									<!-- Begin footer copyright -->
									<div class="footer-bottom-col-left">
										&copy; Aivo / All rights reserved
									</div>
									<!-- End footer copyright -->

								</div> <!-- /.col -->

								<div class="col-md-6">

									<div class="footer-bottom-col-right">
										Design by: <a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" target="_blank">Themetorium</a>
									</div>

								</div> <!-- /.col -->

							</div> <!-- /.row -->
						</div> <!-- /.footer-container -->
					</div>
					<!-- End footer bottom -->

				</div> <!-- /.footer-inner -->

				<!-- Scroll to top button -->
				<a href="home-full-screen-slideshow.html#body" class="scrolltotop sm-scroll" title="Scroll to top"></a>

			</section>
			<!-- End footer section -->

	
		<!-- End body content -->
        @endsection