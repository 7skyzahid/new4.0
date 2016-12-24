@extends('layouts.app')

@section('content')
	<div class="clearfix"></div>



	<div class="clearfix"></div>


	<!-- Titlebar
    ================================================== -->
	<section class="title-section">
		<div class="container">
			<!-- crumbs -->
			<div class="row crumbs">
				<div class="col-md-12">
					<a href="index.html">Home</a> / All Sellers
				</div>
			</div>
			<!-- End crumbs -->

			<!-- Title - Search-->
			<div class="row title">
				<!-- Title -->
				<div class="col-md-9">
					<h1>View Sellers
						<span class="subtitle-section">
                               Seller
                                <span class="left"></span>
                                <span class="right"></span>
                            </span>
						<span class="line-title"></span>
					</h1>
				</div>
				<!-- End Title-->

				<!-- Search-->
				<div class="col-md-3">
					<form class="search" action="/skillsearch" method="Post">
						{!! csrf_field() !!}
						<div class="input-group">
							<input class="form-control" placeholder="Search..." name="tosearch"  type="text" required="required">
							<span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                </span>
						</div>
					</form>
				</div>
				<!-- End Search-->
			</div>
			<!-- End Title -Search -->

		</div>
	</section>


	<!-- Content
    ================================================== -->
	<div class="container">

		<div class="col-md-9">
			<h1>Search Sellers

			</h1>
		</div>

		<div class="eight columns">
			<!-- Select -->
			<select data-placeholder="Filter by status" class="form-control">
				<option value="">Filter by status</option>
				<option value="new">New</option>
				<option value="interviewed">Interviewed</option>
				<option value="offer">Offer extended</option>
				<option value="hired">Hired</option>
				<option value="archived">Archived</option>
			</select>
			<div class="margin-bottom-15"></div>
		</div>
            <br>
		<div class="eight columns">
			<!-- Select -->
			<select data-placeholder="Newest first" class="form-control">
				<option value="">Newest first</option>
				<option value="name">Sort by name</option>
				<option value="rating">Sort by rating</option>
			</select>
			<div class="margin-bottom-35"></div>
		</div>
			<br>
		<button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>



		<!-- Applications -->

		<!-- Slides Team -->
		<section class="padding-top slide-team" id="team">

			<!-- Slide Team  -->
			<ul id="slide-team">
			@if(isset($profile))
				@foreach($profile as $pro)
				<!-- Item Slide Team  -->
				<li>
					<div class="container">
						<div class="row">

							<!-- Image Team  -->
							<div class="col-md-3">
								<a href="images/{{$pro->profilepic}}" class="fancybox">
									@if($pro->profilepic=='')
										<img src="img/team-members/1.png" alt="">

									@else
									<img src="images/{{$pro->profilepic}}" alt="">
										@endif
								</a>
							</div>
							<!-- End Image Team  -->

							<!-- Info  Team  -->
							<div class="col-md-5 padding-top-mini">
								<h3 class="title-subtitle">
									<a href="{{ url('/'.$pro->username) }}">{{$pro->username}}</a>
									<span>	{{$pro->briefdescription}}.</span>
								</h3>
								<p>Inani nominati sit eu. Te ubique cotidieque philosophia mel, vix id omnes iudico prompta. Ex usu nihil mediocritatem. Sea quod vituperata no, omittam offendit vel in. Noster voluptua luptatum id mea.</p>

								<a href="mailto:{{$pro->email}}" target="_blank" class="btn btn-primary">SEND ME AN EMAIL</a>

								<!-- Social-->
								<ul class="social">
									<li data-toggle="tooltip" title data-original-title="Facebook">
										<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Twitter">
										<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Youtube">
										<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
								<!-- End Social-->

							</div>
							<!-- End Info  Team  -->

							<!-- Skills Team  -->
							<div class="col-md-4 padding-top-mini">
								<h3>Skills</h3>
								<div class="meter color nostripes">
									<span style="width: 50%"><span>DESING</span><span class="text-right">50%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 70%"><span>PHOTOGRAPHY</span><span class="text-right">70%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 90%"><span>BRANDING</span><span class="text-right">90%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 100%"><span>SOCIAL MEDIA</span><span class="text-right">100%</span></span>
								</div>
							</div>
							<!-- End Skills Team  -->

						</div>
					</div>
				</li>
				<!-- End Item Slide Team  -->
				@endforeach
			@endif
				{{--<!-- Item Slide Team  -->
				<li>
					<div class="container">
						<div class="row">

							<!-- Image Team  -->
							<div class="col-md-3">
								<a href="img/team-members/2.png" class="fancybox">
									<img src="img/team-members/2.png" alt="" title="View Image">
								</a>
							</div>
							<!-- End Image Team  -->

							<!-- Info  Team  -->
							<div class="col-md-5 padding-top-mini">
								<h3 class="title-subtitle">
									Federic Gordon.
									<span>Front End.</span>
								</h3>
								<p>Inani nominati sit eu. Te ubique cotidieque philosophia mel, vix id omnes iudico prompta. Ex usu nihil mediocritatem. Sea quod vituperata no, omittam offendit vel in. Noster voluptua luptatum id mea.</p>

								<a href="mailto:demo@ithemes.com" target="_blank" class="btn btn-primary">SEND ME AN EMAIL</a>

								<!-- Social-->
								<ul class="social">
									<li data-toggle="tooltip" title data-original-title="Facebook">
										<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Twitter">
										<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Youtube">
										<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
								<!-- End Social-->

							</div>
							<!-- End Info  Team  -->

							<!-- Skills Team  -->
							<div class="col-md-4 padding-top-mini">
								<h3>Skills</h3>
								<div class="meter color nostripes">
									<span style="width: 50%"><span>DESING</span><span class="text-right">50%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 70%"><span>PHOTOGRAPHY</span><span class="text-right">70%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 90%"><span>BRANDING</span><span class="text-right">90%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 100%"><span>SOCIAL MEDIA</span><span class="text-right">100%</span></span>
								</div>
							</div>
							<!-- End Skills Team  -->

						</div>
					</div>
				</li>
				<!-- End Item Slide Team  -->

				<!-- Item Slide Team  -->
				<li>
					<div class="container">
						<div class="row">

							<!-- Image Team  -->
							<div class="col-md-3">
								<a href="img/team-members/3.png" class="fancybox">
									<img src="img/team-members/3.png" alt="" title="View Image">
								</a>
							</div>
							<!-- End Image Team  -->

							<!-- Info  Team  -->
							<div class="col-md-5 padding-top-mini">
								<h3 class="title-subtitle">
									Federic Gordon.
									<span>Front End.</span>
								</h3>
								<p>Inani nominati sit eu. Te ubique cotidieque philosophia mel, vix id omnes iudico prompta. Ex usu nihil mediocritatem. Sea quod vituperata no, omittam offendit vel in. Noster voluptua luptatum id mea.</p>

								<a href="mailto:demo@ithemes.com" target="_blank" class="btn btn-primary">SEND ME AN EMAIL</a>

								<!-- Social-->
								<ul class="social">
									<li data-toggle="tooltip" title data-original-title="Facebook">
										<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Twitter">
										<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<li data-toggle="tooltip" title data-original-title="Youtube">
										<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
								<!-- End Social-->

							</div>
							<!-- End Info  Team  -->

							<!-- Skills Team  -->
							<div class="col-md-4 padding-top-mini">
								<h3>Skills</h3>
								<div class="meter color nostripes">
									<span style="width: 50%"><span>DESING</span><span class="text-right">50%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 70%"><span>PHOTOGRAPHY</span><span class="text-right">70%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 90%"><span>BRANDING</span><span class="text-right">90%</span></span>
								</div>
								<div class="meter color nostripes">
									<span style="width: 100%"><span>SOCIAL MEDIA</span><span class="text-right">100%</span></span>
								</div>
							</div>
							<!-- End Skills Team  -->

						</div>
					</div>
				</li>
				<!-- End Item Slide Team  -->--}}


			</ul>
			<!-- End Slide Team  -->

		</section>
		<!-- End Team Slide-->
	</div>

@endsection
