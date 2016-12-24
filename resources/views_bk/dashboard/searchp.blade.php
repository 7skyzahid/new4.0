@extends('layouts.app')

@section('content')


	<!-- Titlebar
================================================== -->
	<div id="titlebar">
		<div class="container">
			<div class="ten columns">
				<span>We found 1,412 jobs matching:</span>
				<h2>Web, Software & IT</h2>
			</div>

			<div class="six columns">
				<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
			</div>

		</div>
	</div>


	<!-- Content
    ================================================== -->
	<div class="container">
		<!-- Recent Jobs -->
		<div class="eleven columns">
			<div class="padding-right">

				<form action="/searchjobss" method="get" class="list-search">
					{!! csrf_field() !!}

					<button><i class="fa fa-search"></i></button>
					<input type="text" placeholder="job title, keywords or company name"  name="tosearch" />
					<div class="clearfix"></div>
				</form>

				<ul class="job-list full">
					@if(isset($posts))

					@foreach($posts as $post)
					<li><a href="job-page.html">
							<img src="images/job-list-logo-02.png" alt="">
							<div class="job-list-content">
								<h4>	{{ $post->title}}<span class="part-time">	{{ $post->payment_type}}</span></h4>
								<div class="job-icons">
									<span><i class="fa fa-briefcase"></i> 	{{ $post->author}}</span>
									<span><i class="fa fa-map-marker"></i> 	{{ $post->address}}</span>
									<span><i class="fa fa-money"></i>	{{ $post->deadline}}</span>
								</div>
								<p>	{{ $post->description}}</p>
							</div>
						</a>
						<div class="clearfix"></div>
					</li>
					@endforeach
					@else
						<span  style="background-color:#cccccc">We don't have any records!</span>
					@endif


				</ul>
				<div class="clearfix"></div>

				<div class="pagination-container">
					<nav class="pagination">
						<ul>
							<li><a href="#" class="current-page">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="blank">...</li>
							<li><a href="#">22</a></li>
						</ul>
					</nav>

					<nav class="pagination-next-prev">
						<ul>
							<li><a href="#" class="prev">Previous</a></li>
							<li><a href="#" class="next">Next</a></li>
						</ul>
					</nav>
				</div>

			</div>
		</div>


		<!-- Widgets -->
		<div class="five columns">

			<!-- Sort by -->
			<div class="widget">
				<h4>Sort by</h4>

				<!-- Select -->
				<select data-placeholder="Choose Category" class="chosen-select-no-single">
					<option selected="selected" value="recent">Newest</option>
					<option value="oldest">Oldest</option>
					<option value="expiry">Expiring Soon</option>
					<option value="ratehigh">Hourly Rate – Highest First</option>
					<option value="ratelow">Hourly Rate – Lowest First</option>
				</select>

			</div>

			<!-- Location -->
			<div class="widget">
				<h4>Location</h4>
				<form action="#" method="get">
					<input type="text" placeholder="State / Province" value=""/>
					<input type="text" placeholder="City" value=""/>

					<input type="text" class="miles" placeholder="Miles" value=""/>
					<label for="zip-code" class="from">from</label>
					<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

					<button class="button">Filter</button>
				</form>
			</div>

			<!-- Job Type -->
			<div class="widget">
				<h4>Job Type</h4>

				<ul class="checkboxes">
					<li>
						<input id="check-1" type="checkbox" name="check" value="check-1" checked>
						<label for="check-1">Any Type</label>
					</li>
					<li>
						<input id="check-2" type="checkbox" name="check" value="check-2">
						<label for="check-2">Full-Time <span>(312)</span></label>
					</li>
					<li>
						<input id="check-3" type="checkbox" name="check" value="check-3">
						<label for="check-3">Part-Time <span>(269)</span></label>
					</li>
					<li>
						<input id="check-4" type="checkbox" name="check" value="check-4">
						<label for="check-4">Internship <span>(46)</span></label>
					</li>
					<li>
						<input id="check-5" type="checkbox" name="check" value="check-5">
						<label for="check-5">Freelance <span>(119)</span></label>
					</li>
				</ul>

			</div>

			<!-- Rate/Hr -->
			<div class="widget">
				<h4>Rate / Hr</h4>

				<ul class="checkboxes">
					<li>
						<input id="check-6" type="checkbox" name="check" value="check-6" checked>
						<label for="check-6">Any Rate</label>
					</li>
					<li>
						<input id="check-7" type="checkbox" name="check" value="check-7">
						<label for="check-7">$0 - $25 <span>(231)</span></label>
					</li>
					<li>
						<input id="check-8" type="checkbox" name="check" value="check-8">
						<label for="check-8">$25 - $50 <span>(297)</span></label>
					</li>
					<li>
						<input id="check-9" type="checkbox" name="check" value="check-9">
						<label for="check-9">$50 - $100 <span>(78)</span></label>
					</li>
					<li>
						<input id="check-10" type="checkbox" name="check" value="check-10">
						<label for="check-10">$100 - $200 <span>(98)</span></label>
					</li>
					<li>
						<input id="check-11" type="checkbox" name="check" value="check-11">
						<label for="check-11">$200+ <span>(21)</span></label>
					</li>
				</ul>

			</div>



		</div>
		<!-- Widgets / End -->


	</div>


@endsection