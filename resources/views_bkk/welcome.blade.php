@extends('layouts.app')

@section('content')
       <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
	<div class="clearfix"></div>

	<div class="clearfix"></div>


	<!-- Banner
    ================================================== -->
	<div id="banner">
		<div class="row">
		<div class="container">
			

				<div class="search-container">

					<!-- Form -->
					<h2>Find job</h2>

					<form action="returnjob" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-3">
                            <input type="text" name="jobtitle" id="jobtitle" class="form-control" placeholder="job title" value=""/>
                        </div>

                        <div class="col-md-3">
                            <input type="text" name="country" id="jobcountry" class="form-control" placeholder="job Country" value=""/>
                        </div>
                        
                        <div class="col-md-3">
                            <input type="text" name="city" id="jobcity" class="form-control" placeholder="city" value=""/>
                        </div>

                        <div class="col-md-3">
                          <button class="btn btn-info">
                              <span class="glyphicon glyphicon-search "></span>
                              Search</button>
                        </div>
					</form><br><br>
					<!-- Browse Jobs -->
					<div class="browse-jobs leed">
						Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
					</div>

					<!-- Announce -->
					<div class="announce">
						We’ve over <strong>15 000</strong> job offers for you!
					</div>

				</div>

			</div>
		</div>
		</div>
	</div>


	<!-- Content================================================== -->




    <section class="paddings">
        <div class="container">
				<h3 class="margin-bottom-25">Recent Jobs</h3>

                	@if(isset($jobs))
                    	@foreach($jobs as $job)
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

    <!-- Services -->
    <section class="paddings services position-relative">
        <div class="container">

            <i class="fa fa-cogs icon-section top right"></i>



            <!-- Title Heading -->
            <div class="titles-heading">
                <div class="line"></div>
                <h1>Great Services
                    <span>
                          <i class="fa fa-star"></i>
                          tristique senectus malesuada
                          <i class="fa fa-star"></i>
                        </span>
                </h1>
            </div>
            <!-- End Title Heading -->

            <!-- Row fuid-->
            <div class="row padding-top">
                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service border-right">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>High Quality</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service border-right">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-fire"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>Ultra Hot Design</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>Free Updates and Support</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

            </div>
            <!-- End Row fuid-->

            <!-- Row fuid-->
            <div class="row">
                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service border-right">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>24/7 Support</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service border-right">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-plane"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>Flexible Solutions</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-4">
                    <div class="item-service">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="col-md-10">
                                <h4>Original Design</h4>
                                <h5>tristique senectus malesuada</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                    </div>
                </div>
                <!-- End Item service-->

            </div>
            <!-- End Row fuid-->

        </div>
        <!-- End Container-->
    </section>
    <!-- End Services-->


<script>
    $(function()
    {
        $( "#jobtitle" ).autocomplete({
            source: "{{URL::route('autocomplete')}}",
            minLength: 1,
            select: function(event, ui) {

            }
        });
    });
	$(function()
	{
		$( "#jobcountry" ).autocomplete({
			source: "{{URL::route('autocompletecountry')}}",
			minLength: 1,
			select: function(event, ui) {

			}
		});
	});
    $(function()
    {
        $( "#jobcity" ).autocomplete({
            source: "{{URL::route('autocompletejobcity')}}",
            minLength: 1,
            select: function(event, ui) {

            }
        });
    });

</script>


    </div>
@endsection
