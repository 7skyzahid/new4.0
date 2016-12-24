@extends('layouts.app')

@section('style')
@parent
<link rel="stylesheet" href="<?php echo asset('css/faq.css')?>" type="text/css"> 
@endsection

@section('content')

<br>
<div id="wrapper" class="container">
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

	<div >
				 
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="/images/2.png" alt="Chania" width="460" height="100">
			</div>

			<div class="item">
				<img src="/images/3.png" alt="Chania" width="460" height="100">
			</div>
		 <div class="item">
				<img src="/images/4.png" alt="Chania" width="460" height="100">
			</div>
		
		</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<br><br>
<div class="container" id="faq">
		<section>
			<h1>Frequently Asked Questions</h1>
		</section>


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What is mindGigs?</span></h3>
			</div>


			<div class="accordion-container">
				<p>mindGigs connects people that are looking for work with people that want
				to hire people for work. This work can be the form of a tutor that can
				teach you a skill such as French, Mathematics or Web Development. Or it
				could be someone that helps you develop a website, design your product or
				run your social media.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="accordion-trigger">
				<h3><i></i> <span class="accordion-trigger">How do I ensure I get the quality of
				work that I want?</span></h3>
			</div>


			<div class="accordion-container">
			<p>First, you will have to make sure you hire the right person for the work
				you are looking for. If you can afford it and there is someone available
				locally than that is usually the best choice as you have the best chance of
				communicating well. If you can not afford someone locally than you can hire
				someone from a remote part of the world which might be more affordable.</p>


				<p>Second, you need to guide and monitor the person you have hired. You can
				use tools like <a href="www.timedoctor.com" target=
				"_blank">www.timedoctor.com</a> to keep an eye on the work that is being
				produced as this takes a screenshot of the worker every few minutes so you
				can see that they are working on your project when they are saying that
				they are working on your project. You can also use a tool like <a href=
				"www.slack.com" target="_blank">www.slack.com</a> to help improve the
				communication. We also recommend tools like <a href="www.WhatsApp.com"
				target="_blank">www.WhatsApp.com</a> so that you can speak and message the
				person effecitively. There is also <a href="www.Skype.com" target=
				"_blank">www.Skype.com</a> so you can hold video calls with your
				freelancer.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What tools can help me deliver the
				project quicker?</span></h3>
			</div>


			<div class="accordion-container">
				<p>You will have to figure out what works best for you but here are a few
				tools we recommend:</p>


				<ul>
					<li>www.trello.com - a free tool to help you project manage your project.
					In trello you can create three buckets "to do", "doing" and "done". Each
					bucket has cards on it for the tasks to do. You can assign each task to
					the different people on your team. Trello is free to use.</li>


					<li>www.Skype.com - Skype allows you to communicate for free. There is a
					"Share my Screen" feature that allows you to share screen. You can also do
					group calls to upto 25 people. Skype is free to use.</li>


					<li>www.WhatsApp.com - WhatsApp allows instant communications. This allows
					you to message when you might be at work or somewhere else. It is like SMS
					but better. You can also create groups so that it is easier to communicate
					with a team. You can also use WhatsApp to call and speak to people
					instantly. There are a few countries such as the UAE and Saudi Arabia in
					which calling is banned but check this with the person you are hiring.
					WhatsApp is free to use.</li>


					<li>www.Slack.com - Slack is a better communication tool. It allows you to
					create channels so that different team members can talk in their own
					channel. You can tag people using "@" so they get the message. Slack comes
					in useful when you grow from a few people (where you can use WhatsApp) to
					a growing team. Slack is a market leader in the development industry.
					Slack is initially free to use but can grow to $7 per user and above.</li>


					<li>We recommend having a daily call to keep your team on track and deal
					with any hurdles. At mindGigs for instance we have a daily call at 8 am UK
					time 7 days a week. Even if some of the team is unable to join we have it
					anyway to keep the momentum going for our own startup. We have had
					failures in the past as we didn't closely monitor the work our teams were
					doing and this led to a lot of wastage.</li>
				</ul>


				<p>
				</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">How do I make payments?</span></h3>
			</div>


			<div class="accordion-container">
				<p>You will pay mindGigs for the work through your credit or debit card. We
				use BraintreePayments which is the same technology that companies such as
				Uber, Pinterest and AirBnb use. It is safe to use and we do not store your
				credit card information. You can also make payments through bank
				transfer.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What is your long term vision for
				mindGigs?</span></h3>
			</div>


			<div class="accordion-container">
				<p>In the long term we even think about opening up mindGigs academies in
				remote parts of the world where wages are low. We plan to help train up
				people so that they have the skills to work anywhere in the world. We also
				plan to run short courses in large cities like London, New York and San
				Francisco so we teach people how to effectively bring an idea to
				market.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What are some tips for
				hiring?</span></h3>
			</div>


			<div class="accordion-container">
				<p>Do spend some time to look through people's profiles. Think if you would
				like to hire locally or hire remotely. If you hire locally it might be more
				expensive but you might get your project delivered quicker as it will be
				easier to communicate face to face. You can start by hiring someone for 15
				minutes. If you like what you hear in the interview than you can hire for a
				day or you might then hire for a month. You can view the ratings that other
				people have left the person you have hired.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What are some tips for being
				hired?</span></h3>
			</div>


			<div class="accordion-container">
				<p>Upload a smart photo of yourself, preferably with a smile. People that
				have a photo are 5 times more likely to be hired than profiles without a
				photo as more trust is built. List all your skills and your references.
				Upload as much information about yourself as possible such as your National
				Identity Card or your Passport Copy. When you don't have a job, try and go
				through online tutorials to teach yourself skills.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What are some tips for working in an
				international environment?</span></h3>
			</div>


			<div class="accordion-container">
				<p>In order to be successful with mindGigs you need to learn how to work in
				an international environment - the people you are working with might be
				from a very different culture than yours. Avoid using religious terms. This
				includes "Salaam, Shaloom, God Bless, Inshallah, Mashallah" etc. This is
				because the client or your freelancer might not be the same background as
				yours and might find these terms offensive. Try to study the other person's
				culture and have a bit of background about their country. You can start by
				looking up their country on www.wikipedia.org. You can see the currency
				conversion from google "E.g. GBP 100 to PKRS" to convert 100 British pounds
				to Pakistani Rupees. We always present things in your base currency (e.g.
				if you are in the UK it is British Pounds, in France it is the Euro, In US
				it is the US Dollar, in Pakistan it is the Pakistani Rupees). The only
				slight thing to look out for is the actual money received or charged might
				slightly change due to currency fluctuation.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What if I am not happy with the person
				I have hired?</span></h3>
			</div>


			<div class="accordion-container">
				<p>In the first instance, you should communicate with the person you hired
				that you are not happy with their performance and you might terminate their
				contract. If the performance still does not improve you can think about
				terminating the person and hiring someone else. You can instantly terminate
				the contract and we will pay the person up to the day that you had hired
				them. You can also leave a bad rating for the person you hired which acts
				as an incentive for better performance.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">What happens if my freelancer doesn't
				turn up?</span></h3>
			</div>


			<div class="accordion-container">
				<p>If your freelancer does not turn up then you will have be able to let us
				know through the system and we will give you a full refund for the work.
				You can also leave a bad rating for the freelancer so they are less likely
				to let other people down. Occasionally, this will happen due to family or
				another type of emergency and so you should be able to reschedule.</p>
			</div>
		</div>
		<!-- END OF TOGGLE -->


		<div class="toggle">
			<div class="toggle-title">
				<h3><i></i> <span class="accordion-trigger">How do I get paid?</span></h3>
			</div>


			<div class="toggle">
				<div class="accordion-container">
					<p>Tutors which are based in the UK will be paid via bank transfer
					therefore they have to give us their sort code and account number. Other
					tutors around the world will have to give us their IBAN number
					(International Bank Account Number) and we will pay through our partner
					www.transferwise.com. We make the payments on the 1st and 15th of each
					month. For those based in the UK this will mean an instant transfer, for
					those based in other countries it can take 3 to 7 working days to get
					paid.</p>
				</div>
			</div>
			<!-- END OF TOGGLE -->


			<div class="toggle">
				<div class="toggle-title">
					<h3><i></i> <span class="accordion-trigger">How do I contact a
					freelancer?</span></h3>
				</div>


				<div class="accordion-container">
					<p>You can view the profile page of all freelancers. You can message them
					through the platform or use one of their contact numbers such as WhatsApp,
					Skype or mobile number.</p>
				</div>
			</div>
			<!-- END OF TOGGLE -->


			<div class="toggle">
				<div class="toggle-title">
					<h3><i></i> <span class="accordion-trigger">What qualifications do I need to
					become a freelancer?</span></h3>
				</div>


				<div class="accordion-container">
					<p>You don't need any qualification to become a freelancer. However, the
					more qualifications you have the better you will stand out. This may be
					especially important if you would like to be a tutor. The mindGigs
					platform gives you the opportunity to upload all the certificates that you
					have.</p>
				</div>
			</div>
			<!-- END OF TOGGLE -->


			<div class="toggle">
				<div class="toggle-title">
					<h3><i></i> <span class="accordion-trigger">Why was mindGigs founded?</span></h3>
				</div>


				<div class="accordion-container">
					<p>mindGigs was founded by a frustrated internet entrepreneur, Amir Anzur.
					Amir was frustrated at luanching his various internet ventures which he
					has been doing since 1999. The biggest problem was in reliability of
					staff. Very few people have the work ethic that is required to help a
					startup become a success. mindGigs aims to help those people that have a
					dream or an idea and bring it to reality. You will need a hardworking team
					to help you achieve your dreams. This will mean hiring people that deliver
					what they say they will deliver. The team can be hired locally or
					remotely. You can hire interns to work for you for free - but they will
					require more training. Or you can get a experienced developer to work for
					you. Depending of in they are local (more expensive) or if they are remote
					(usually better value) you can bring your project to reality. mindGigs
					also has many digital innovations. For instance, you can track the screen
					of the freelancer to ensure that they are working on your project. You can
					also make money from spreading the word about mindGigs. For each person
					you refer you make 5% of whatever they spend or whatever they earn for one
					full year.</p>
				</div>
			</div>
			<!-- END OF TOGGLE -->


			<div class="toggle">
				<div class="toggle-title">
					<h3><i></i> <span class="accordion-trigger">I love mindGigs, can I earn money
					from spreading the word about mindGigs?</span></h3>
				</div>


				<div class="accordion-container">
					<p>Yes. With mindGigs you create a unique profile page. For instance,
					www.mindGigs.com/amiranzur. You simply spread that URL to your friends. If
					that is the first time that a person has clicked on mindGigs platform than
					we give you 5 % of whatever they spend or earn through the platform. So
					for instance if someone that has clicked on your link spends GBP 1,000
					over the year on our platform, you will make GBP 50. If someone earns GBP
					500 through the platform, you will earn GBP 25. There is an unlimited
					amount you can earn. You must be the first person they heard about the
					platform from. So for instance, if we have already put a cookie that they
					first clicked on www.mindGigs.com/amiranzur than if they later click on
					www.mindGigs.com/johnsmith the credit will still go to amiranzur.</p>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
			<script type="text/javascript">
							 if( jQuery(".toggle .toggle-title").hasClass('active') ){
										jQuery(".toggle .toggle-title.active").closest('.toggle').find('.accordion-container').show();
								}
								jQuery(".toggle .toggle-title").click(function(){
										if( jQuery(this).hasClass('active') ){
												jQuery(this).removeClass("active").closest('.toggle').find('.accordion-container').slideUp(200);
										}
										else{   jQuery(this).addClass("active").closest('.toggle').find('.accordion-container').slideDown(200);
										}
								});
			</script>
@endsection