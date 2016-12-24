@extends('layouts.app')

@section('content')
<div class="clearfix"></div>



<!-- Title Section -->
<section class="title-section">
	<div class="container">
		<!-- crumbs -->
		<div class="row crumbs">
			<div class="col-md-12">
				<a href="index.html">Home</a> / Contact Us
			</div>
		</div>
		<!-- End crumbs -->

		<!-- Title - Search-->
		<div class="row title">
			<!-- Title -->
			<div class="col-md-9">
				<h1>Contact Us
					<span class="subtitle-section">
                                Email Us Now
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
<div id="map"></div>
<script>
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 51.5054, lng: 0.0838},
			zoom: 8
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASXj64EeMvYY8SwypBQoHkLjM22qwe9xk&callback=initMap"
		async defer></script>

<!-- Contact Us -->
<section class="paddings">
	<div class="container">
		<div class="row">

			<!-- Sidebars -->
			<div class="col-md-4 sidebars">

				<aside>
					<h4>The Office</h4>
					<address>
						<strong>MindGigs, Inc.</strong><br>
						<i class="fa fa-map-marker"></i><strong>Address: </strong> Suite 25, 2 Battle Bridge Lane, London SE1 2HL, <br>
						<i class="fa fa-plane"></i><strong>City: </strong>United Kingdom<br>
						<i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> 447733003930
					</address>

					<address>
						<strong>Mindgigs Emails</strong><br>
						<i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:amirski@amirski.com"> Amirski Anzur amirski@amirski.com </a><br>
						<i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:mindgigspk@gmail.com">Zahid Hussain  mindgigspk@gmail.com </a>
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
				<h3>Contact Info</h3>
				<p class="lead">
					mindGigs was created by an internet entrepreneur having lived a digital life since 1999. Starting my own startup in London in 2003 I saw how difficult it was to find staff. I initially coded everything myself. Then when the company started growing and I needed to focus on the sales, I had to get a developer to take over my role. I gave 15 % equity to a university friend plus had to pay him GBP 2,000 per month salary. 				</p>

				<hr class="tall">

				<!-- Tabs -->
				<div class="tabs">
					<!-- Tab nav -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#contactUs" data-toggle="tab">
								<i class="fa fa-envelope"></i> Contact Us</a>
						</li>
						<li class=""><a href="#support" data-toggle="tab">
								<i class="fa fa-bullhorn"></i>Suport</a>
						</li>
					</ul>
					<!-- End Tab nav -->

					<!-- Tab Content -->
					<div class="tab-content">
						<!-- Tab item -->
						<div class="tab-pane active" id="contactUs">

							<h4>Contact Us</h4>

							<!-- Form Contact -->
							<form class="form-contact" action="php/send-mail-contact.php">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Comment *</label>
											<textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-lg btn-primary">
									</div>
								</div>
							</form>
							<!-- End Form Contact -->
							<div class="result"></div>
						</div>
						<!-- End Tab item -->

						<!-- Tab item -->
						<div class="tab-pane" id="support">

							<h4>Support</h4>

							<!-- Form Contact -->
							<form class="form-contact" action="php/send-mail-support.php">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name">
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Subject</label>
											<input type="text"  required="required" value="" class="form-control" name="Subject">
										</div>
										<div class="col-md-6">
											<label>Phone</label>
											<input type="number"  required="required" value="" class="form-control" name="Phone">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<label>Problem</label>
										<select class="form-control" name="Problem">
											<option>Licence</option>
											<option>Network</option>
											<option>Software</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Comment *</label>
											<textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-lg btn-primary">
									</div>
								</div>
							</form>
							<!-- End Form Contact -->
							<div class="result"></div>
						</div>
						<!-- End Tab item -->

					</div>
					<!-- End Tab Content -->
				</div>
				<!-- End Tabs -->

			</div>
			<!-- End Content Right -->


		</div>
	</div>
	<!-- End Container-->
</section>
<!-- End Contact Us-->

</div>

@endsection