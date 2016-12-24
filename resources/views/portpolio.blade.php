@extends('layouts.app')

@section('content')
    <div class="clearfix"></div>



    <!-- Title Section -->
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="index.html">Home</a> / <a href="#">Porpolio </a>
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Portpolio
                        <span class="subtitle-section">
                                Original Works
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

            <!-- Nav Filters -->
            <div class="portfolioFilter">
                <a href="#" data-filter="*" class="current">Show All</a>
                <a href="#desing" data-filter=".desing">Desing</a>
                <a href="#development" data-filter=".development">Development</a>
                <a href="#mobile" data-filter=".mobile">Mobile</a>
                <a href="#retina" data-filter=".retina">Retina Desing</a>
            </div>
            <!-- End Nav Filters -->

            <!-- Items Works filters-->
            <div class="works portfolioContainer">

                <!-- Item Work-->
                <!-- End Item Work-->

                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/4.png" alt=""/>
                            <a href="img/works/4.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>How to lose weight fast </h4>
                            <p>
                                This website is about that how to lose weight fast and naturally
                                Developed with wordpress and site builder on siteground.

                            </p>
                            <div class="icons-work">
                                <a href="http://profastlinks.com/">profastlinks </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item Work-->
                <div class="col-md-6 development">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/3.png" alt=""/>
                            <a href="img/works/3.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>NJE Enterprise </h4>
                            <p>Import export products to /from Pakistan. The products include Rice , green tea , Sugar , Coconut ,.
                                Also providing services of logistics. Transferring goods from Pakistan to Kabul and Afghanistan. Developed with WordPress and Primmum theme structure
                                .</p>
                            <div class="icons-work">
                               <a href="http://www.njenterprises.com.pk/" target="_blank">live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->

                <!-- Item Work-->
                <div class="col-md-6 development">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/8.png" alt=""/>
                            <a href="img/works/8.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4> Attack Style Wrestling Website Plus Woo Commerce Products</h4>
                            <p>Pellentesque habitant morbi tristique.</p>
                            <div class="icons-work">
                                <a href="http://www.njenterprises.com.pk/" target="_blank">live Demo</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->


                <!-- Item Work-->
                <div class="col-md-6 desing retina">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/5.png" alt=""/>
                            <a href="img/works/5.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4> Make a difference </h4>
                            <p>How to teach your children. The art of lessons books . How to teach math to your children developed with WordPress with Woo Commerce..</p>
                            <div class="icons-work">
                                <a href="http://makeadif.info/" target="_blank">live Demo</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->

                <!-- Item Work-->
                <div class="col-md-6 mobile">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/6.png" alt=""/>
                            <a href="img/works/6.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4> Dianephillips learning</h4>
                            <p>Same copy of make a difference just for another location. Developed with same technology WordPress and Woo Commerce.</p>
                            <div class="icons-work">
                                <a href="http://dianephillipslearning.info/" target="_blank">live Demo</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->

                <!-- Item Work-->
                <div class="col-md-6 retina">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/7.png" alt=""/>
                            <a href="img/works/7.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4> Fast sleep now </h4>
                            <p>How to sleep fast without overthinking and fear of future website .Developed with WordPress..</p>
                            <div class="icons-work">
                                <a href="http://fastsleepnow.com/" target="_blank">live Demo</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->

                <!-- Item Work-->
                <div class="col-md-6 mobile desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/10.png" alt=""/>
                            <a href="img/works/10.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4> Kitchen Kourier </h4>
                            <p>Courier services and delivery grocery products within Islamabad and Rawalpindi Pakistan. Delivery of launch Boxes , Courier services and Grocery items.</p>
                            <div class="icons-work">
                                <a href="http://www.kitchenkourier.com/" target="_blank">live Demo</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item Work-->
                <div class="col-md-6 development">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/2.png" alt=""/>
                            <a href="img/works/2.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Attack Style Wrestling Website Plus Woo Commerce Products</h4>
                            <p>https://www.attackstylewrestling.com/</p>
                            <div class="icons-work">
                                <a href="http://www.njenterprises.com.pk/" target="_blank">live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item Work-->

                <!-- End Item Work-->
                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/1.png" alt=""/>
                            <a href="img/works/1.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Project Inertia</h4>
                            <p>
                                A construction Company specially saving records of constructed buildings their daily report
                            </p>
                            <div class="icons-work">
                                <a href="www.projectinertia.com/dashboard">Project Inertia </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/11.png" alt=""/>
                            <a href="img/works/11.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Golden Age Manor</h4>
                            <p>
                                Golden Age Manor has enjoyed the quiet, rural setting of Amery, Wisconsin for over five decades
                            </p>
                            <div class="icons-work">
                                <a href="http://www.goldenagemanor.com/New/">Iive Demo </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/12.png" alt=""/>
                            <a href="img/works/12.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Shoping Cart</h4>
                            <p>
                                A construction Company specially saving records of constructed buildings their daily report
                            </p>
                            <div class="icons-work">
                                <a href="http://www.balsamlakeprolawn.com/">Live Demo </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/13.png" alt=""/>
                            <a href="img/works/13.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Photo State</h4>
                            <p>
                                A Photo state Company specially saving records of constructed buildings their daily report
                            </p>
                            <div class="icons-work">
                                <a href="www.projectinertia.com/dashboard">Live Demo </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 desing">
                    <div class="item-work">
                        <div class="hover">
                            <img src="img/works/14.png" alt=""/>
                            <a href="img/works/14.png" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                        </div>
                        <div class="info-work">
                            <h4>Shoping cart</h4>
                            <p>
                                A Shoping cart Company specially saving records of constructed buildings their daily report
                            </p>
                            <div class="icons-work">
                                <a href="http://www.stairswithflair.ca/shop/index.php?cPath=23">Live Demo </a>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- End Items Works filters-->
        </div>
        <!-- End Container-->
    </section>
    <!-- End Works-->


</div>
@endsection
