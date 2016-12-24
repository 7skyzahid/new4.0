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
				<a href="{{ url('/dashboard/create') }}" class="button">Post a Job, It’s Free!</a>
			</div>

		</div>
	</div>


	<!-- Content
    ================================================== -->
	<div class="container">
		<!-- Recent Jobs -->
		<div class="eleven columns">
			<div class="padding-right">

				<form  method="get" class="list-search" action="/jobsearch">
					{!! csrf_field() !!}
					<button><i class="fa fa-search"></i></button>
					<input type="text" placeholder="Search freelancer services (e.g. logo design)" name="searchjob" />
					<div class="clearfix"></div>
				</form>
				<ul class="resumes-list">
					@if(isset($skill[0]))
					@foreach($skill as $post)
					<li><a href="{{$post->username}}" style="text-decoration: none;">

							@if($post->profilepic=='')
								               <img src="images/download.png" alt="">
							@else

								<img src=images/{{$post->profilepic}} alt="">

							@endif


							<div class="resumes-list-content">
								<h4>{{$post->username}}<span>{{$post->title}}</span></h4>
								<span><i class="fa fa-map-marker"></i> {{$post->city}}</span>
								<span><i class="fa fa-money"></i> {{$post->hourlyrate}} / hour</span>
								
								<p>{{ str_limit($post->about, $limit = 150, $end = '...') }}</p>

								<div class="skills">

									<span>{{$post->title}}</span>
								</div>
								<div class="clearfix"></div>

							</div>
						</a>
						<div class="clearfix"></div>
					</li>
					@endforeach
					@endif


				</ul>
				<div class="clearfix"></div>


			</div>
		</div>

		<!-- Widgets -->
			<div class="five columns">

				<!-- Sort by -->
				<div class="widget">
					<h4>Sort by</h4>

					<!-- Select -->
					<select data-placeholder="Choose Category" class="chosen-select-no-single">
						<option selected="selected" value="recent">Relevance</option>
						<option value="">Hourly Rate – Highest First</option>
						<option value="">Hourly Rate – Lowest First</option>
					</select>

				</div>

				<!-- Skills -->
				<div class="widget">
					<h4>Skills</h4>

					<!-- Select -->
					<form action="#" method="get">
						<select data-placeholder="Select Skills" class="chosen-select" multiple>
							@if(isset($arrays))
							@foreach($skill as $skills)
								<option value="">{{$skills['title']}}</option>
							@endforeach
							@endif

						</select>
						<div class="margin-top-15"></div>
						<button class="button">Filter</button>
					</form>
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