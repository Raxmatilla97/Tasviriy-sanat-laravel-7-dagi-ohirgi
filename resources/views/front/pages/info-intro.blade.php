
@extends('makets.front.sayt')

@section('info-intro')
    


<!-- =======================================
			///// Begin services section (style-1) /////
			============================================ 
			* Add class "ss-light" if you use a dark background.
			-->
			<section id="services-section" class="services-style-1">
				<div class="services-inner tt-wrap">

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
					<div class="info-box-wrap ib-boxed ib-icon-color">
						
						<div class="row">
							<div class="col-sm-4">
							
								<!-- Begin info box -->
								<img src="{{ asset('front/assets/img/png/png1.png') }}">
								<div class="info-box">
									
									
								
									<div class="info-box-info">
										
										<h3 class="info-box-heading"><a href="services-3.html">Web Design</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
					
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<img src="{{ asset('front/assets/img/png/png2.png') }}">
								<div class="info-box">
								
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Web Development</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">

								<!-- Begin info box -->
								<img src="{{ asset('front/assets/img/png/png3.png') }}">
								<div class="info-box">

								
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Motion Graphics</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->

						<div class="row">
							
							<div class="col-sm-4">
								<img src="{{ asset('front/assets/img/misc/autocad.png') }}">
								<!-- Begin info box -->
								<div class="info-box">
									
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Illustrations</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">
								<img style="width: 100%;"  src="{{ asset('front/assets/img/misc/chizma.png') }}">
								<!-- Begin info box -->
								<div class="info-box">
								
									<div class="info-box-info">
										<h3 class="info-box-heading"><a href="services-3.html">Marketing</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->

							<div class="col-sm-4">
								<img style="width: 100%;" src="{{ asset('front/assets/img/png/images-8.png') }}">
								<!-- Begin info box -->
								<div class="info-box">
									
								
									<div class="info-box-info">
									
										<h3 class="info-box-heading"><a href="services-3.html">Analytics</a></h3>
										<div class="info-box-text tt-ellipsis" style="overflow-wrap: break-word;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempore. Proin pulvinar scelerisque lorem apti.
										</div>
									</div> <!-- /.info-box-info -->
								</div>
								<!-- End info box -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->

					</div>
					<!-- End info box wrap -->

				</div> <!-- /.services-inner -->
			</section>





            @endsection