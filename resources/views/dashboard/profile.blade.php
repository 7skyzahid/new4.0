@extends('layouts.app')

@section('content')

    <section class="padding-top slide-team" id="team">

        <!-- Slide Team  -->

        <div class="container">
            <div class="row">

                <!-- Image Team  -->
                <div class="col-md-3">
                    @if(isset($uprof->profilepic))
                        <a href="images/{{$uprof->profilepic}}" class="fancybox">
                            <img src="images/{{$uprof->profilepic}}" alt="" title="View Image">
                        </a>
                    @else
                        <a href="img/team-members/1.png" class="fancybox">
                            <img src="img/team-members/1.png" alt="" title="View Image">
                        </a>

                @endif
                <!-- other details-->

                </div>
                <!-- End Image Team  -->

                <!-- Info  Team  -->
                <div class="col-md-5 padding-top-mini">
                    <h3 class="title-subtitle">
                    @if(isset($uvar->firstname))
                        {{$uvar->firstname}} {{$uvar->lastname}}
                        <span>
                        @if(isset($uprof->briefdescription))
                        {$uprof->briefdescription}}.
                        @endif
                        </span>
                    @endif
                    </h3>
                    <p style="align-items: center; border-bottom: #a3a4ff">
                        @if(isset($uprof->about))
                        {{$uprof->about}} 
                        @endif
                        </p>
                        
                    <a href="{{$uvar->email}}" target="_blank" class="btn btn-primary">SEND ME AN EMAIL</a>
                    	
                    	
                    <a href="{{$uvar->username}}/sendmsg" target="_blank" class="btn btn-primary">CONTACT</a>
			

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

                <div class="col-md-4 padding-top-mini" style="border-bottom: dimgrey">
                    @if((Auth::check() == true) && (Auth::user()->name == isset($uprof->username)))
                        @if($uprof->username ==Auth::user()->name)
                            <a class="btn btn-success btn-small pull-right" data-toggle="tooltip"
                               href="/{{$uprof->username}}/editprofile">Edit Profile</a>
                        @endif
                    @endif
                    <hr>
                    <i class="fa fa-phone"> {{$uvar->phone}}</i>

                    <i class="fa fa-tag" aria-hidden="true">
                        @if(isset($uprof->address))
                            {{($uprof->address)}},
                        @endif
                        @if(isset($uprof->city))
                            {{($uprof->city)}},
                        @endif
                        @if(isset($uprof->country))
                            {{($uprof->country)}}
                        @endif
                    </i>
                </div>
                <hr>
                <div class="col-md-4 padding-top-mini">

                    <aside class="tags">

                        <h4 >Tags Skills
                            @if((Auth::check() == true) && (Auth::user()->name == isset($uprof->username)))
                                @if($uprof->username ==Auth::user()->name)


                                    <a href="" id="addExperience"  data-toggle="modal"
                                       data-target="#skillsModal">Add New</a>
                                @endif
                            @endif
                        </h4>




                        @if(isset($skills->title))
                            @foreach (explode(', ', $skills->title) as $interest)
                                <a href="#" class="#" title="17 topic"><i class="fa fa-tag"></i> {{$interest}} </a>

                            @endforeach
                        @endif


                    </aside>


                </div>
            </div>
            <!-- End Skills Team  -->

        </div>

        <!-- End Slide Team  -->

    </section>


    <section class="paddings">
        <div class="container">
            <div class="row">

                <!-- Blog Post -->
                <div class="col-md-8">

                    <!-- Item Post -->
                    <!-- End Item Post -->

                    <!-- Content Autor -->
                    <div class="row autor">
                        <h3><i class="fa fa-user"></i> Project Worked</h3>
                        <!-- Image Team  -->
                        <div class="col-md-3">
                            <div class="image-autor">
                                <a href="img/testimonials/1.jpg" class="fancybox">
                                    <img src="img/clients-downloads/1.jpg" alt="" title="View Image">
                                </a>
                            </div>
                            <h4 class="title-subtitle text-center">
                                Federic Gordon.
                                <span>Front End.</span>
                            </h4>
                        </div>
                        <!-- End Image Team  -->

                        <!-- Info  Team  -->
                        <div class="col-md-9">
                            <div > <h4>7 days ago.</h4></div>


                            <p>Inani nominati sit eu. Te ubique cotidieque philosophia mel, vix id omnes iudico prompta. Ex usu nihil mediocritatem. Sea quod vituperata no, omittam offendit vel in. Noster voluptua luptatum id mea. Et voluptatum adversarium usu, rebum nominati recteque vix ei.</p>
                            <!-- Social-->


                            <ul class="social">
                                <li data-toggle="tooltip" title data-original-title="Facebook">
                                    <a href="{{$uprof->fblink}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li data-toggle="tooltip" title data-original-title="Twitter">
                                    <a href="{{$uprof->twitlink}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li data-toggle="tooltip" title data-original-title="linkedin">
                                    <a href="{{$uprof->lilink}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                            <!-- End Social-->




                        </div>
                        <!-- End Info  Team  -->

                    </div>
                    <!--End Content Autor -->

                    <!-- Comment post -->
                    <section class="comment-post">

                        <h3><i class="fa fa-comments"></i>Comments <a href="#">(4)</a></h3>
                        <div class="divider"></div>

                        <!-- comment-post -->
                        <ul>
                            <li class="row">
                                <div class="col-md-3">
                                    <div class="image-visitor">
                                        <img src="img/testimonials/1.jpg" alt="Visitor1">
                                    </div>
                                    <h6>JOhn Frelance</h6>
                                    <span class="date">6/12/2013</span>
                                </div>
                                <div class="col-md-9">
                                    <div class="info-comment">
                                        <span class="arrow-comment"></span>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                        <a href="#form-comment">Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-3">
                                    <div class="image-visitor">
                                        <img src="img/testimonials/2.jpg" alt="Visitor2">
                                    </div>
                                    <h6>Federic Gordon</h6>
                                    <span class="date">6/12/2013</span>
                                </div>
                                <div class="col-md-9">
                                    <div class="info-comment">
                                        <span class="arrow-comment"></span>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                        <a href="#form-comment">Reply</a>
                                    </div>
                                </div>
                            </li>

                            <li class="row child">
                                <div class="col-md-3">
                                    <div class="image-visitor">
                                        <img src="img/testimonials/3.jpg" alt="Visitor1">
                                    </div>
                                    <h6>Oprah Riuer</h6>
                                    <span class="date">6/12/2013</span>
                                </div>
                                <div class="col-md-9">
                                    <div class="info-comment">
                                        <span class="arrow-comment"></span>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                        <a href="#form-comment">Reply</a>
                                    </div>
                                </div>
                            </li>

                            <li class="row">
                                <div class="col-md-3">
                                    <div class="image-visitor">
                                        <img src="img/testimonials/1.jpg" alt="Visitor3">
                                    </div>
                                    <h6>Jeffer Martinez</h6>
                                    <span class="date">6/12/2013</span>
                                </div>
                                <div class="col-md-9">
                                    <div class="info-comment">
                                        <span class="arrow-comment"></span>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                        <a href="#form-comment">Reply</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- End post comments -->

                    </section>


                </div>
                <!-- End Blog Post -->


                <!-- Sidebars -->
                <div class="col-md-4 sidebars">



                    <aside>



                        <div class="accordion-trigger"><i class="fa fa-apple"></i> Experience

                        </div>
                        <div class="detail" id="work-experience">



                            <div class="info">
                                @if(isset($Message))
                                    <h4>{{$Message}}</h4>
                                @endif
                                <aside class="tags">
                                    <a href="" id="addExperience"  data-toggle="modal"
                                       data-target="#myModal">Add New</a>
                                </aside>

                                @if(isset($experienceData))
                                    @foreach($experienceData as $experience)


                                        <div  class="tags" style="border: solid #c1c1c1">
                                            {{$experience->company}}               {{$experience->position}}


                                            <p>Experince From    {{$experience->from}}   To   {{$experience->to}}</span>

                                            </p>


                                            <div class="mop-wrapper space-bottom">

                                                <p>{{$experience->description}}<br>
                                                </p>
                                            </div>
                                            <!--Testing Ajax Edit Id -->

                                            <a id="editExperience" data-id="{{$experience->id}}"
                                               class="glyphicon glyphicon-pencil" data-toggle="modal"
                                               data-target="#myModal">Edit</a>
                                            <a href="deleteexperience/{{$experience->id}}"
                                               data-id="{{$experience->id}}" class="glyphicon glyphicon-remove">Delete</a>


                                        </div>
                                    @endforeach
                                @endif

                            </div>


                            <div class="accordion-trigger">
                                Education
                            </div>
                            <div class="accordion-container">
                                <p></p> <a href="" id="addExperience" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#educationModel">ADD </a>                           </div>


                    </aside>




                    <aside>
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular Work</a></li>
                                <li class=""><a href="#recentPosts" data-toggle="tab">Recent Work</a></li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-pane" id="recentPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="blog-post.html">
                                                        <img src="img/clients-downloads/1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Pellentesque habitant morbi.</a>
                                                <div class="post-meta">
                                                    Nov 25 / 7 / 2013
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </aside>

                    <aside>
                        <h4>Recent flickr</h4>
                        <ul id="flickr-aside" class="thumbs"></ul>
                    </aside>

                    <hr>


                </div>
                <!-- End Sidebars -->


            </div>
        </div>
        <!-- End Container-->
    </section>

    <hr>

    <!-- Table United three colums-->
    <div class="row">
        <div class="col-md-12">

            <!-- Title Table United three colums-->
            <h2 class="title-subtitle">
                Seller Pricing Tables
            </h2>
            <hr>
            <!-- End Title Table United three colums-->

            <!-- Tables together-->
            <ul class="tables-together padding-top">

                <!-- Item Table together-->
                <li class="item-table">
                    <h4 class="table-header">BASIC</h4>
                    <p class="table-tagline">Small website or blog developement</p>
                    <div class="table-price-container">
                        <div class="table-price">
                            <span class="table-price-currency">$</span>
                            <span class="table-price-whole">5</span>
                            <span class="table-price-decimals">.96</span>
                            <span class="table-price-period">/project</span>
                        </div>
                        <p class="table-price-discountinfo">Billed annually or $9.95 month-to-month</p>
                    </div>
                    <ul class="table-features">
                        <li class="table-features-item">
                            <strong>10</strong>Wordpress pages elements
                        </li>
                        <li class="table-features-item">
                            <strong>1</strong> Wiht Advanced admin
                        </li>
                        <li class="table-features-item">
                            <strong>↳ 100,000</strong> users
                        </li>

                    </ul>
                    <a class="button-base button-gray" href="#">Order Now</a>
                    <p class="table-cta">Order now and <em>save $35.88</em></p>
                    <img src="img/tables/img-pricing-shadow-left.png" alt="Shadow" class="table-shadow table-shadow-left">
                </li>
                <!-- End Item Table together-->

                <!-- Item Table together - highlighted -->
                <li class="item-table table-item-highlighted">
                    <div class="table-discount"> -10%</div>
                    <h4 class="table-header">PREMIUM</h4>
                    <p class="table-tagline">Website with 1 month Maintance</p>
                    <div class="table-price-container">
                        <div class="table-price">
                            <span class="table-price-currency">$</span>
                            <span class="table-price-whole">10</span>
                            <span class="table-price-decimals">.99</span>
                            <span class="table-price-period">/mo</span>
                        </div>
                        <p class="table-price-discountinfo">Billed annually or $9.95 month-to-month</p>
                    </div>
                    <ul class="table-features">
                        <li class="table-features-item">
                            <strong>10</strong>Pages Styled elements
                        </li>
                        <li class="table-features-item">
                            <strong>1</strong>With Advanced admin
                        </li>
                        <li class="table-features-item">
                            <strong>↳ 100,000</strong> users
                        </li>

                    </ul>
                    <a class="button-base btn-primary" href="#">Order Now</a>
                    <p class="table-cta">Order now and <em>save $35.88</em></p>
                </li>
                <!-- End Item Table  together - highlighted-->

                <!-- Item Table together-->
                <li class="item-table">
                    <h4 class="table-header">ADVANCE</h4>
                    <p class="table-tagline">High performance applications</p>
                    <div class="table-price-container">
                        <div class="table-price">
                            &nbsp;                            <span class="table-price-currency">$</span>
                            <span class="table-price-whole">15</span>
                            <span class="table-price-decimals">.5</span>
                            <span class="table-price-period">/mo</span>
                        </div>
                        <p class="table-price-discountinfo">Billed annually or $9.95 month-to-month</p>
                    </div>
                    <ul class="table-features">
                        <li class="table-features-item">
                            <strong>10</strong> Styled elements
                        </li>
                        <li class="table-features-item">
                            <strong>1</strong>  Advanced admin
                        </li>
                        <li class="table-features-item">
                            <strong>↳ 100,000</strong> users
                        </li>

                    </ul>
                    <a class="button-base button-gray" href="#">Order Now</a>
                    <p class="table-cta">Order now and <em>save $35.88</em></p>
                    <img src="img/tables/img-pricing-shadow-right.png" alt="Shadow" class="table-shadow table-shadow-right">
                </li>
                <!-- End Item Table together-->

            </ul>
            <!-- End Tables together-->
        </div>
    </div>
    <!-- Table United three colums-->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add Experience</h4>

                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="experienceForm" id="experienceForm" method="post"
                          action="addexperience">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="hidden" name="keyValue"/>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="position">Position:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="position" id="position"
                                       placeholder="Enter Position">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="company">Company:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="company" id="company"
                                       placeholder="Enter Company">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="datefrom">From:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="datefrom" id="datefrom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="dateto">To:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="dateto" id="dateto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="save" class="btn btn-info">Add Experience</button>
                            </div>
                        </div>
                        <input type="text" name="id" id="id" class="hidden">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!---Skills Modal -->
    <div id="skillsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add Skills</h4>

                </div>
                <div class="modal-body">

                    <form class="form-horizontal" name="skillForm" id="skillForm" method="post"
                          action="addskill">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="hidden" name="keyValue"/>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="skills" id="skills" placeholder="Enter your skills e.g php,html,css">@if(isset($skills->title)){{$skills->title}}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="saveskill" class="btn btn-info">Add Skills</button>
                            </div>
                        </div>
                        <input type="text" name="id" id="id" class="hidden">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!---Skills Modal -->

    <!-- Education Modal content-->
    <div id="educationModel" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add Education</h4>

                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="educationForm" id="educationForm" method="post"
                          action="addeducation">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="hidden" name="keyValue"/>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="degree">Degree Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="degree" id="degree"
                                       placeholder="Degree Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="studylevel">Study Level:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="studylevel" id="studylevel"
                                       placeholder="e.g Master or Bachelor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="institute">Name of institute:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="institute" id="institute"
                                       placeholder="Institute Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="datefromeducation">From:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="datefrom" id="datefromeducation">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="dateto">To:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="dateto" id="datetoeducation">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="descriptioneducation"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="addeducation" class="btn btn-info">Add Education</button>
                            </div>
                        </div>
                        <input type="text" name="id" id="hiddenid" class="hidden">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Portfilio Modal content-->
    <div id="portfilioModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add Portfilio</h4>

                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="portfilioForm" id="portfilioForm" method="post"
                          action="addportfilio">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="hidden" name="keyValue"/>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="projectName">Project Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="projectName" id="projectName"
                                       placeholder="Project Title">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="portfilioId" id="portfilioId" class="hidden">
                            <label class="control-label col-sm-2" for="description">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="descriptionportfilio"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="portfilioimage">Project Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="portfilioimage" id="portfilioimage"/>
                                <div id='imagePopup' style='display:none'>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="addportfilio" class="btn btn-info">Add Portfilio</button>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <!-----Adding Certifcate Model --->


    <script async src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"
            type="text/javascript">
    </script>
    <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script>
    <script src=
            "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    <script>
        $(function () {
            var toggleFloatingMenu = function () {
                $('.js-floating-nav').toggleClass('is-visible');
                $('.js-floating-nav-trigger').toggleClass('is-open');
            };

            $(".background-card").css("min-height", window.screen.availHeight + "px");
            $("[data-toggle=tooltip]").tooltip();
            $('.js-floating-nav-trigger').on('click', function (e) {
                e.preventDefault();
                toggleFloatingMenu();
            });
            $('.js-floating-nav a').on('click', toggleFloatingMenu);

            $("#remaining-profiles").on('show.bs.collapse', function () {
                $('.js-profiles-collapse > i')
                        .removeClass('icon-chevron-down')
                        .addClass('icon-chevron-up');
            });

            $("#remaining-profiles").on('hidden.bs.collapse', function () {
                $('.js-profiles-collapse > i')
                        .removeClass('icon-chevron-up')
                        .addClass('icon-chevron-down');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#addExperience").click(function () {
                $('#experienceForm').trigger('reset');
            });
        });

        $('.info').delegate('#editExperience', 'click', function () {
            var valueData = ($(this).data('id'));
            var buttonValue = $('#save').html('Edit Experience');
            $('.modal-title').html('Edit Experience');
            document.experienceForm.action = 'updaterecord/' + valueData;

            var url = '{{URL::to('getUpdate')}}';
            $.ajax({
                type: 'get',
                url: url,
                data: {'id': valueData},
                success: function (data) {
                    $('#id').val(data.id);
                    $('#position').val(data.position);
                    $('#company').val(data.company);
                    $('#datefrom').val(data.from);
                    $('#dateto').val(data.to);
                    $('#description').val(data.description);

                }

            });
        });
        //edit education Model
        $('.info').delegate('#editeducation', 'click', function () {
            var valueData = ($(this).data('id'));
            console.log(valueData);
            var buttonValue = $('#addeducation').html('Edit Education');
            $('.modal-title').html('Edit Education');
            document.educationForm.action = 'updateeducation/' + valueData;
            //console.log(valueData);
            var url = '{{URL::to('geteduaction')}}';
            $.ajax({
                type: 'get',
                url: url,
                data: {'id': valueData},
                success: function (data) {
                    $('#hiddenid').val(data.id);
                    $('#degree').val(data.degree);
                    $('#studylevel').val(data.studylevel);
                    $('#institute').val(data.institute);
                    $('#datefromeducation').val(data.from);
                    $('#datetoeducation').val(data.to);
                    $('#descriptioneducation').val(data.description);

                }

            });
        });
        //edit certificate
        $('.info').delegate('#editcertificate', 'click', function () {
            var valueData = ($(this).data('id'));
            console.log(valueData);
            var buttonValue = $('#editcertificate').html('Edit Certificate');
            $('.modal-title').html('Edit Certificate');
            document.certificateForm.action = 'updatecertificate/' + valueData;
            console.log(valueData);
            var url = '{{URL::to('getcertificate')}}';
            $.ajax({
                type: 'get',
                url: url,
                data: {'id': valueData},
                success: function (data) {
                    $('#id').val(data.id);
                    $('#certifcatetitle').val(data.title);
                    $('#certifcatedesc').val(data.description);

                }

            });
        });
        //edit Portfilio
        $('.info').delegate('#editportfilio', 'click', function () {
            var valueData = ($(this).data('id'));
            console.log(valueData);
            var buttonValue = $('#editportfilio').html('Edit Portfilio');
            $('.modal-title').html('Edit Portfilio');
            document.portfilioForm.action = 'updateportfilio/' + valueData;
            //console.log(valueData);
            var url = '{{URL::to('getportfilio')}}';
            $.ajax({
                type: 'get',
                url: url,
                data: {'id': valueData},
                success: function (data) {
                    $('#portfilioId').val(data.id);
                    $('#projectName').val(data.title);
                    $('#descriptionportfilio').val(data.description);
                    $("#imagePopup").html("<img src='public/" + data.image + "'/>");
                    $('#imagePopup').show();

                }

            });
        });

    </script>
    <script>
        WebFontConfig = {
            google: {families: ['Lato:300,400,700:latin']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        (function (d, s, a, i, j, r, l, m, t) {
            try {
                l = d.getElementsByTagName('a');
                t = d.createElement('textarea');
                for (i = 0; l.length - i; i++) {
                    try {
                        a = l[i].href;
                        s = a.indexOf('/cdn-cgi/l/email-protection');
                        m = a.length;
                        if (a && s > -1 && m > 28) {
                            j = 28 + s;
                            s = '';
                            if (j < m) {
                                r = '0x' + a.substr(j, 2) | 0;
                                for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                j++;
                                s = decodeURIComponent(s) + a.substr(j, m - j)
                            }
                            t.innerHTML = s.replace(/<\/g,'&lt;').replace(/ > / g, '&gt;');
                            l[i].href = 'mailto:' + t.value
                        }
                    } catch (e) {
                    }
                }
            } catch (e) {
            }
        })(document);
        /* ]]> */
    </script>
@stop

