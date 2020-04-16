@extends('makets.front.sayt')

@section('info-2-gramma')


					<!-- Begin split box (based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height)
					======================= -->
					<div class="split-box">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height bg-dark-4 text-white">

									<!-- Column (Split box image) 
									==============================
									* Use class "frame-left" or "frame-right" to enable split box image frame (Effect only on element boxed layout!).
									* Use class "sbi-shadow" to enable split box image shadow effect (Effect only on element boxed layout!).
									-->
									<div class="col-lg-push-6 col-lg-6 col-lg-height split-box-image no-padding bg-image lazy" data-src="{{ ('front/assets/img/misc/gallereya-info.png') }}">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-90" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css') }}" file for more info. Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-70"></div>

									</div> <!-- /.col -->

									<!-- Column (use class "col-lg-top", "col-lg-middle" or "col-lg-bottom" to align content) -->
									<div class="col-lg-pull-6 col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content 
										=============================
										* Depends on which side the content is located use class "sb-content-left" or "sb-content-right".
										* Use class "sb-shifted-left" or "sb-shifted-right" to enable shifted content (not recommended for long content).
										* Use class "sb-content-color" to enable content box colored style.
										-->
										<div class="split-box-content sb-content-left">
											
											<!-- Begin info box wrap 
											========================= 
											* Use class "ib-style-2" to change info box style.
											* Use class "ib-boxed" enable info box boxed style.
											* Use class "ib-icon-color" to enable icon colored style (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-shape" to enable icon background shape (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-color" to enable icon background color style.
											* Use class "ib-icon-rounded" to enable icon rounded style (class "ib-icon-bg-color" is required!).
											* Use class "ib-light" if the background is dark.
											-->
											<div class="info-box-wrap ib-light ib-style-2">
												
												<div class="row">
													
													<div class="col-sm-6">
														
														<!-- Begin info box -->
														<div class="info-box" >
														
															<span class="info-box-icon"><span class="lnr lnr-screen"></span></span>
															
															<div class="info-box-info " >
															
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Design</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-cog"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Development</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-camera-video"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Motion Graphics</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-leaf"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Illustrations</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->
												</div> <!-- /.row -->

											</div>
											<!-- End info box wrap -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.page-section-inner -->
			</section>
			<!-- End page section -->
    
@endsection