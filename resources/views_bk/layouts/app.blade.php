@extends('layouts.master')



@section('navbar')

    <!-- Theme-options -->
    <div id="theme-options">
            <div class="title">Theme Options<span title="Theme Options"><i class="fa fa-cogs right"></i></span></div>
            <span>COLORS</span>
            <ul id="colorchanger">      
                <li><a class="colorbox blue" href="?theme=blue" title="Blue Skin"></a></li>
                <li><a class="colorbox red" href="?theme=red" title="Red Skin"></a></li>
                <li><a class="colorbox yellow" href="?theme=yellow" title="Yellow Skin"></a></li>
                <li><a class="colorbox green" href="?theme=green" title="Green Skin"></a></li>
                <li><a class="colorbox orange" href="?theme=orange" title="Orange Skin"></a></li>
                <li><a class="colorbox purple" href="?theme=purple" title="Purple Skin"></a></li>
                <li><a class="colorbox pink" href="?theme=pink" title="Pink Skin"></a></li>
                <li><a class="colorbox cocoa" href="?theme=cocoa" title="Cocoa Skin"></a></li>
            </ul>
            <span>LAYOUT STYLE</span>
            <ul class="layout-style">      
                <li class="wide">Wide</li>
                <li class="boxed">Boxed</li> 
                <li class="boxed-margin active">Boxed Margin</li>               
            </ul>
            <span>WEBSITE TYPE</span>
           <ul class="layout-style">      
                <li class="active"><a href="index.html">Corporate</a></li>
                <li><a href="index-creative.html">Creative</a></li>
                <li><a href="index-one-page.html" >One Page</a></li>                
            </ul>  
            <div class="patterns" style="display:block;">
                <span>BACKGROUND PATTERNS</span>
                <ul class="backgrounds">
                    <li class="bgnone" title="None - Default"></li>
                    <li class="bg1"></li>
                    <li class="bg2"></li>
                    <li class="bg3"></li>
                    <li class="bg4 "></li>
                    <li class="bg5"></li> 
                    <li class="bg6"></li>
                    <li class="bg7"></li>
                    <li class="bg8"></li>
                    <li class="bg9 "></li>
                    <li class="bg10"></li> 
                    <li class="bg11"></li>                   
                </ul>  
            </div>
    </div>
    <!-- End Theme-options -->
<!-- Login Client -->
        <div class="jBar">
          <div class="container">            
              <div class="row">    

                  <div class="col-md-10">
                     <div class="row padding-top-mini">
                        <!-- Item service-->
                        <div class="col-md-4">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-check-square"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Login or create new account.</h5>
                                    </div>
                                </div>  
                                <p>Pellentesque habitant morbi fames ac turpis egestas. Vestibulum tortor quam. Pellentesque habitant</p>
                            </div>
                        </div>      
                        <!-- End Item service-->

                        <!-- Item service-->
                        <div class="col-md-4">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-star"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Review your order.</h5>
                                    </div>
                                </div>  
                                <p>Pellentesque habitant morbi fames ac turpis egestas. Vestibulum tortor quam Pellentesque habitant.</p>
                            </div>
                        </div>      
                        <!-- End Item service-->

                        <!-- Item service-->
                        <div class="col-md-4">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-credit-card"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Payment And FREE shipment.</h5>
                                    </div>
                                </div>  
                                <p>Pellentesque habitant morbi fames ac turpis egestas. Vestibulum tortor quam. Pellentesque habitant</p>
                            </div>
                        </div>      
                        <!-- End Item service-->
                     </div>
                  </div>

                  <div class="col-md-2">
                      <h5>Client Login</h5>
                      <form>
                            <input type="email" placeholder="Username" required>
                            <input type="password" placeholder="Password" required>
                            <input type="submit" class="btn btn-primary" value="sign in">
                            <span>Or</span>                       
                            <input type="submit" class="btn btn-primary" value="Register">
                      </form>
                  </div>

                            
                  <span class="jTrigger downarrow"><i class="fa fa-minus"></i></span>
              </div>
          </div>
      </div>
      <span class="jRibbon jTrigger up" title="Login"><i class="fa fa-plus"></i></span>
      <div class="line"></div>
      <!-- End Login Client -->

        <!-- Info Head -->
        <section class="info-head">  
            <div class="container">
                <ul>  
                    <li><i class="fa fa-headphones"></i> 01800034567</li>
                    <li><i class="fa fa-comment"></i> <a href="#">Live chat</a></li>                    
                    <li>
                        <ul>
                          <li class="dropdown">
                            <i class="fa fa-globe"></i> 
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Language<i class="fa fa-angle-down"></i>
                            </a>
                             <ul class="dropdown-menu">  
                                 <li><a href="#"><img src="images/language/spanish.png" alt="">Spanish</a></li>
                                 <li><a href="#"><img src="images/language/english.png" alt="">English</a></li>
                                 <li><a href="#"><img src="images/language/frances.png" alt="">Frances</a></li>
                                 <li><a href="#"><img src="images/language/portugues.png" alt="">Portuguese</a></li>
                            </ul>
                          </li>                      
                        </ul>
                    </li>
                </ul> 
            </div>            
        </section>
        <!-- Info Head -->


<!-- Header-->
    <header class="animated fadeInDown delay1">           
        <div class="container">
             <div class="row col-md-12"> 
 <!-- Logo-->
            <div class="col col-md-2 logo">
                <a href="{{ url('/') }}">                            
                    <img src="images/mindGigs-logo-high-res.jpg" alt="Logo">
                </a>
            </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                 <nav class="col-md-9">
                     <!-- Menu-->
                     <ul id="menu" class="sf-menu">
                         <li>
                             <a href="/">HOME <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li> <a  href="{{ url('/faq') }}">FAQ</a></li>


                             </ul>
                         </li>
                         <li><a href="{{ url('/aboutUs') }}">ABOUT</a></li>
                         <li><a href="services.html">BAYUR <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a class="btn btn-default" href="{{ url('/freelancers') }}">Profile</a></li>
                                 <li> <a class="btn btn-default" href="{{ url('/scoreboard') }}">Scoreboard</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard') }}">Jobs View</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/freelancers') }}">All Candidates</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="feature-princing-tables.html">SELLER <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a class="btn btn-default" href="{{ url('/managerequest') }}">Manage Requests</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/blogs') }}">Blogs</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/searchjobs') }}">Jobs Search</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/managepost') }}">Manage Posts</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard/create') }}">Jobs Post</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="/portpolio">Portpolio </a>

                         </li>
                         <li>
                             <a href="/blog">BLOG <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a href="/blogs/create">Post</a></li>
                             </ul>
                         </li>
                         <li><a href="/contact">CONTACT</a></li>
                     </ul>
                     <!-- End Menu-->
                 </nav>
                </div><!-- End Row-->
            </div><!-- End Container-->
        </header>
        <!-- End Header-->

@endsection

<!-- JavaScripts -->

@section('scripts')
    <script type="text/javascript">
        $(function () {
            "use strict";

            $(window).scroll(function () {
                var $scrollTop = $(this).scrollTop();

                if ($scrollTop > 100) {
                    $(".navbar").addClass("navbar-active");
                } else {
                    $(".navbar").removeClass("navbar-active");
                }
            });


        });
    </script>
     <script>
        $(function()
        {
            $( "#skilltitle" ).autocomplete({
                source: "{{URL::route('skillcomplete')}}",
                minLength: 1,
                select: function(event, ui) {

                }
            });
        });


    </script>

@endsection
