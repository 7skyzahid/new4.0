@extends('layouts.app')

@section('content')


	<section class="title-section">
		<div class="container">
			<!-- crumbs -->
			<div class="row crumbs">
				<div class="col-md-12">
					<a href="/">Home</a> / Search
				</div>
			</div>
			<!-- End crumbs -->

			<!-- Title - Search-->
			<div class="row title">
				<!-- Title -->
				<div class="col-md-9">
					<h1>Search
						<span class="subtitle-section">
                               Hire Related Services
                                <span class="left"></span>
                                <span class="right"></span>
                            </span>
						<span class="line-title"></span>
					</h1>
				</div>
				<!-- End Title-->

				<!-- Search-->
				<div class="col-md-3">
					<form class="search" action="#" method="Post">
						<div class="input-group">
							<input class="form-control" placeholder="Search..." name="email"  type="email" required="required">
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

	<section class="paddings">
		<div class="container">
			<div class="row">

				<!-- Sidebars -->
				<div class="col-md-4 sidebars">

					<aside>
						<h4>The Office</h4>
						<address>
							<strong>Roken, Inc.</strong><br>
							<i class="fa fa-map-marker"></i><strong>Address: </strong> fa795 Folsom Ave, Suite 600<br>
							<i class="fa fa-plane"></i><strong>City: </strong>San Francisco, CA 94107<br>
							<i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> (123) 456-7890
						</address>

						<address>
							<strong>Roken Emails</strong><br>
							<i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> sales@roken.com</a><br>
							<i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> support@roken.com</a>
						</address>
					</aside>

					<hr class="tall">

					<aside>
						<h4>Recent flickr</h4>
						<ul id="flickr-aside" class="thumbs"></ul>
					</aside>

				</div>
				<!-- End Sidebars -->

				<!-- Content Right -->
				<div class="col-md-8">
					<h3>Search Jobs</h3>

					<hr class="tall">

					<!-- Tabs -->

						<!-- End Tab nav -->

						<!-- Tab Content -->
						<div class="tab-content">
							<!-- Tab item -->
							<div class="tab-pane active" id="contactUs">

								<h4>Search Job</h4>

								<!-- Form Contact -->
								<form action="/searchjobss" method="get" class="list-search">
									{!! csrf_field() !!}

									<input type="text" placeholder="job title, keywords or company name" class="form-control"  name="tosearch" />
									<button class="btn btn-lg btn-primary"><i class="fa fa-search"></i></button>

									<div class="clearfix"></div>
								</form>								<!-- End Form Contact -->
								<div class="result"></div>
							</div>
							<!-- End Tab item -->

							<!-- Tab item -->
							<!-- End Tab item -->


						<!-- End Tab Content -->
					</div>
					<!-- End Tabs -->

					<section class="paddings">
						<div class="container">
							<h3 class="margin-bottom-25">Search Jobs</h3>

							@if(isset($posts))
								@foreach($posts as $job)
									<div class="accordion-trigger"><i class="fa fa-android"></i>
										<h4>
											<a href="job/{{$job->id}}">
												<img src="images/job-list-logo-01.png" alt="">
												{{$job->title}}
											</a>
									</div>


									<div class="accordion-container">
										@if($job->payment_type =='full time')
											<span class="full-time pull-right">{{$job->payment_type}}</span>
										@endif

										@if($job->payment_type =='hourly')
											<span class="part-time pull-right">{{$job->payment_type}}</span>
											@endif
											</h4>
											<span><i class="fa fa-briefcase"></i> {{$job->author}}</span>
											<span><i class="fa fa-map-marker"></i>{{$job->status}}</span>
											<span><i class="fa fa-money"></i> {{$job->amount}}/ hour</span>
											<p>{{$job->description}}</p>
									</div>
								@endforeach
							@endif

							<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
							<div class="margin-bottom-55"></div>
						</div>
					</section>


				</div>
				<!-- End Content Right -->


			</div>
		</div>
		<!-- End Container-->
	</section>


	<!-- Content
    ================================================== -->
</div>

@endsection