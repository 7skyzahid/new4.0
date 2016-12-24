@extends('layouts.app')

@section('content')







	<!-- Title Section -->
	<section class="title-section">
		<div class="container">
			<!-- crumbs -->
			<div class="row crumbs">
				<div class="col-md-12">
					<a href="index.html">Home</a> / <a href="#">Blog </a> / Blog Post
				</div>
			</div>
			<!-- End crumbs -->

			<!-- Title - Search-->
			<div class="row title">
				<!-- Title -->
				<div class="col-md-9">
					<h1>Blog Post
						<span class="subtitle-section">
                                Page post
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
	<!-- End Title Section -->


	<!-- Works -->
	<section class="paddings">
		<div class="container">
			<div class="row">

				<!-- Blog Post -->
				<div class="col-md-8">

					<!-- Item Post -->
					<article class="post">
						<!-- Image Post  -->
						<div class="post-image">
							<img src="img/works/2.jpg" alt="">
						</div>
						<!-- End Image Post  -->

						<div class="clearfix"></div>

						<!-- Post Meta -->
						<div class="post-meta">
							<span><i class="fa fa-calendar"></i> Nov 10, 2012 </span>
							<span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
							<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a></span>
							<span><i class="fa fa-comments"></i> <a href="#">(12)</a></span>
						</div>
						<!-- End Post Meta -->

						<!-- Info post -->
						<div class="info-post">
							<h2><a href="blog-post.html">Pellentesque habitant morbi tristique et netus.</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. <span class="label label-success">Suspendisse vestibulum</span> lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>

							<div class="alert alert-success">
								<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
							</div>

							<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
							<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
						</div>
						<!--End Info post -->

					</article>
					<!-- End Item Post -->

					<!-- Content Autor -->
					<div class="row autor">
						<h3><i class="fa fa-user"></i> About autor</h3>
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
							<p>Inani nominati sit eu. Te ubique cotidieque philosophia mel, vix id omnes iudico prompta. Ex usu nihil mediocritatem. Sea quod vituperata no, omittam offendit vel in. Noster voluptua luptatum id mea. Et voluptatum adversarium usu, rebum nominati recteque vix ei.</p>
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

					<div id="form-comment">

						<h3>New Comment</h3>

						<!-- Form coment -->
						<form>
							<div class="row">
								<div class="form-group">
									<div class="col-md-6">
										<label>Your name *</label>
										<input type="text"  required="required" value="" maxlength="100" class="form-control" name="name" id="name">
									</div>
									<div class="col-md-6">
										<label>Your email address *</label>
										<input type="email"  required="required" value="" maxlength="100" class="form-control" name="email" id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Comment *</label>
										<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;" required="required" ></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit" value="Post Comment" class="btn btn-primary">
								</div>
							</div>
						</form>
						<!-- End Form coment -->
					</div>

				</div>
				<!-- End Blog Post -->


				<!-- Sidebars -->
				<div class="col-md-4 sidebars">

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
					</aside>

					<hr>

					<aside>
						<h4>Categories</h4>
						<ul class="list">
							<li><i class="fa fa-check"></i><a href="#">Design</a></li>
							<li><i class="fa fa-check"></i><a href="#">Photos</a></li>
							<li><i class="fa fa-check"></i><a href="#">Videos</a></li>
							<li><i class="fa fa-check"></i><a href="#">Lifestyle</a></li>
							<li><i class="fa fa-check"></i><a href="#">Technology</a></li>
						</ul>
					</aside>


					<aside class="tags">
						<h4>Tags</h4>
						<a href="#" class="#" title="17 topic"><i class="fa fa-tag"></i> corporate </a>
						<a href="#" class="#" title="44 topic"><i class="fa fa-tag"></i> theme </a>
						<a href="#" class="#" title="10 topic"><i class="fa fa-tag"></i> css3 </a>
						<a href="#" class="#" title="2 topic"><i class="fa fa-tag"></i> premium </a>
						<a href="#" class="#" title="29 topic"><i class="fa fa-tag"></i> html5 </a>
						<a href="#" class="#" title="4 topic"><i class="fa fa-tag"></i> business </a>
						<a href="#" class="#" title="20 topic"><i class="fa fa-tag"></i> all purpose </a>
						<a href="#" class="#" title="14 topic"><i class="fa fa-tag"></i> jquery </a>
						<a href="#" class="#" title="1 topic"><i class="fa fa-tag"></i> muse template </a>
						<a href="#" class="#" title="4 topic"><i class="fa fa-tag"></i> minimalist </a>
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
						<h4>Recent flickr</h4>
						<ul id="flickr-aside" class="thumbs"></ul>
					</aside>

					<hr>

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
