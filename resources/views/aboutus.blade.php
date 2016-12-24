@extends('layouts.app')

@section('content')
    <div class="clearfix"></div>




    <!-- Title Section -->
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="index.html">Home</a> / About
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>About Us
                        <span class="subtitle-section">
                                Great mindGigs
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

            <!-- info-title-section - optional -->
            <div class="row info-title-section">
                <div class="col-md-2 incon-title">
                    <i class="fa fa-plane"></i>
                </div>
                <div class="col-md-10">
                </div>
                <p>  I think great startups start by helping the founders themselves. In this case I am the founder and this is how mindGigs is helping me. Firstly, it has helped me to find a team to hire that will code and develop this platform. I have hired www.mindGigs.com/zahid, www.mindGigs.com/nasir, www.mindGigs.com/Zeeshan, www.mindGigs.com/Bilal and www.mindGigs.com/farooq through the mindGigs platform. I am currently paying them around GBP 120 per month as their salary. If you want to hire any of them, you can. You will simply have to double their salary. Some of them are working at or below market rates as they see the benefit in their learning. So it is still worth it. Although I have invested in their learning and would like to keep them on mindGigs development, I know they will still be working from the office and so we can share the knowledge. My goal is to help train up people and good people.


                </p>
            </div>
            <!-- End info-title-section - optional -->

        </div>
    </section>
    <!-- End Title Section -->


    <!-- Info About Us -->
    <section class="paddings">
        <div class="container">
            <div class="row">

                <div class="col-md-7">
                    <h3>WHO WE ARE</h3>
                    <p>
                        mindGigs was created by an internet entrepreneur having lived a digital life since 1999. Starting my own startup in London in 2003 I saw how difficult it was to find staff. I initially coded everything myself. Then when the company started growing and I needed to focus on the sales, I had to get a developer to take over my role. I gave 15 % equity to a university friend plus had to pay him GBP 2,000 per month salary.

                        Then I discovered outsourcing - I found a company in Islamabad, Pakistan through a friend and I started paying GBP 800 per month for a developer and I didn't have to give up any equity.

                        Eventually over the years, I even found developers myself directly and hiring university graduates starting from GBP 100 per month as I didn't have to pay the company middleman fees.

                    </p>
                    <p>But working remotely isn't always smooth. Especially when I recommended it to my friends. There were communications problems. Cultural problems. And so mindGigs was born. To help people buy services remotely or locally.

                        When I want a guitar teacher I want mine to be local. I prefer learning in person than on Skype. When I get a developer though I don't mind if they are remote. Especially as in London where I currently live I would be paying a decent developer GBP 400 per day whereas a similar coder would cost me GBP 200 per month.

                        There is a big buzz about the On-demand economy. The fact that you can order an uber and it comes right to you. And maybe this principal can also be applied to people. That when you want an accountant you can find the closest one to you. Or that if distance isn't a problem you can hire your team in another part of the world where you pay a fraction of the price.


                          </div>

                <div class="col-md-5">
                    <!-- Simple-slide -->
                    <div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/works/about.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/works/about2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/works/about3.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- End Simple-slide -->
                </div>

            </div>
        </div>
        <!-- End Container-->
    </section>
    <!-- End Info About Us-->


    <!-- Slides Team -->
    <section class="section-gray borders padding-top slide-team">

        <!-- Slide Team  -->
        <ul id="slide-team">

            <!-- Item Slide Team  -->
            <li>
                <div class="container">
                    <div class="row">

                        <!-- Image Team  -->
                        <div class="col-md-3">
                            <a href="img/team-members/1.png" class="fancybox">
                                <img src="img/team-members/1.png" alt="" title="View Image">
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
            <!-- End Item Slide Team  -->


        </ul>
        <!-- End Slide Team  -->

    </section>
    <!-- End Team Slide-->

    <!-- Clients -->
    <!-- End Clients -->

    <!-- Sponsors -->
    <!-- End Sponsors -->




</div>

@endsection
