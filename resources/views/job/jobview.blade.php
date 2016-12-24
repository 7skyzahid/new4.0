@extends('layouts.app')

@section('content')

	<!-- Works -->
	<section class="paddings">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$jobs->title}} : <strong>{{$jobs->parentcategory}}</strong></h2>
                    <p>Created At : {{$jobs->created_at}} <span><strong> Deadline : {{$jobs->deadline}}</strong></span></p>
                    <p> <strong>Posted: {{ $postedtime }} Ago</strong></p>
                    <div style="border: 1px solid #DDD;padding: 15px; height: 250px;" >
                        {{$jobs->description}}

                    </div>
                    <div>
                        <strong>Applicants</strong>
						@if(isset($apllicants))
                            <div>
                                @foreach($apllicants as $appl)
                                <span class="badge">{{$appl->username}}</span>
                                @endforeach
                            </div>
                            @endif
                    </div>
				</div>

				<!-- Sidebars -->
				<div class="col-md-3 sidebars">

					<aside>
						<h4>Searh Sidebar</h4>
						<form class="search" action="#" method="Post">
							<div class="input-group">
								<input class="form-control" placeholder="Search..." name="email"  type="email" required="required">
								<span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                    </span>
							</div>

						</form>
						<form method="post">
							<div class="apply" style="border: 1px solid #DDD;padding: 15px;">
								<h5>Apply Now !</h5>
								<p>How well you match this job is determined by the contents of your profile. The more keyword-rich services and work collections you have, the better your chances!</p>
								<button class="btn btn-info">Apply</button>
							</div>
						</form>
					</aside>

					<aside>
						<h4>Categories</h4>
						<ul class="list">
							<li><i class="fa fa-check"></i><a href="#">{{$jobs->parentcategory}}</a></li>
							<li><i class="fa fa-check"></i><a href="#">{{$jobs->childcategory}}</a></li>
						</ul>
					</aside>

					<aside>
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
								<li class=""><a href="#recentPosts" data-toggle="tab">Recent</a></li>
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
						<h4>Wiget Text</h4>
						<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero.</p>
					</aside>

				</div>
				<!-- End Sidebars -->


			</div>
		</div>
		<!-- End Container-->
	</section>
	<!-- End Works-->

@endsection
