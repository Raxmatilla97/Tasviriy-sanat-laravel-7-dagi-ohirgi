@extends('artuz.layouts.makets.front.sayt')

@section('articles')
<div class="tt-heading tt-heading-lg text-center padding-on">
	<div class="tt-heading-inner">
		<h1 class="tt-heading-title">Pricing Plans</h1>
		<div class="tt-heading-subtitle">Please choose your pricing plan</div>
		
		<!-- Begin zig-zag separator 
		============================= 
		* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
		* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
		-->
		<div class="zig-zag-separator">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<!-- End zig-zag separator -->

		<div class="tt-heading-text">
			<p>Duis mattis quam quis quam cursus, a rutrum ante luctus. Phasellus porta ornare enim ac euismod. Nulla fringilla lectus ac tincidunt viverra.</p>
		</div>

	</div> <!-- /.tt-heading-inner -->
</div>

  <div class="blog-list-inner" >  <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

	<div class="row no-margin">
	
		<!-- Content column -->
		<div class="col-md-12 no-padding-left no-padding-right">

			<div class="isotope-wrap">
				
				<!-- Begin isotope
				===================
				* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
				* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
				-->
				<div class="isotope col-4 gutter-3">

					<!-- Begin isotope items wrap 
					============================== -->
					<div style="position: relative; height: 1065.63px;" class="isotope-items-wrap no-margin">

						<!-- Grid sizer (do not remove!!!) -->
						<div class="grid-sizer"></div>


						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a style="background-image: url(&quot;{{ ('front/assets/img/blog/list/blog-1.jpg') }}&quot;);" href="blog-single.html" class="bl-item-image bg-image lazy"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Web Design</a> <a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Responsive Web Design: 50 Examples and Best Practices</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 28, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 10</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-2.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>25 Free and Premium Admin HTML Website Templates and Layouts</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 22, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 66</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-3.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Why Designers and Web Developers Must Work Together</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 14, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 3</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-4.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Time-Saving Tools and Resources for Freelance Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 11, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 0</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-5.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Tutorials</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>How to Create a Flat Cityscape in Adobe Illustrator</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-7.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>21 tips for Creating a Great Personal Online Portfolio</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-9.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Convert PSD to HTML – Useful Resources for Web Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-6.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Premium Web Tools &amp; Services Recommended By Professionals</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 02, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

					</div>
					<!-- End isotope items wrap -->

				</div>
				<!-- End isotope -->

			</div> <!-- /.isotope-wrap -->


			<!-- Begin tt-pagination 
			========================= 
			* Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
			* Use class "tt-pagin-rounded" to enable pagination rounded style -->
			<div class="tt-pagination-wrap">
				<ul class="tt-pagination">
					
					<li class="active center"><a href="blog-list-grid-fluid.html#0">Barcha yangilik va elonlarni ko'rish</a></li>
				   
				</ul>

			</div>
			<!-- End tt-pagination -->

		</div> <!-- /.col (Content column) -->

	</div> <!-- /.row -->

</div> <!-- /.blog-list-inner -->
@endsection