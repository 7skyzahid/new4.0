@extends('layouts.master')



@section('navbar')

    <!-- Theme-options -->
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
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                          {{ csrf_field() }}
                            <input type="text" placeholder="Username" required>
                            <input type="password" placeholder="Password" required>
                            <input type="submit" class="btn btn-primary" value="sign in">
                            <span>Or</span>                       
                            <a href="/register" class="btn btn-primary">Register</a>
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


					@if (! Auth::guest())
                    @include('layouts.notifications')
					@endif
                    <li><i class="fa  fa-dashboard"></i>Dashboard </li>
                   <li><a href="conversation"> <i class="fa  fa-inbox"></i>Inbox</a> </li>
                    <li><i class="fa  fa-shopping-cart"></i>Shopping Cart </li>

                    <li>
                        <ul>
                            <li class="dropdown">
                                <i class="fa fa-btn fa-user"></i>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    @if (Auth::guest())
                                        Member
                                    @else
                                        {{Auth::user()->name}}
                                    @endif
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @if (Auth::guest())
                                        <li> <a href="{{ url('/login') }}" > <i class="fa fa-btn fa-user"></i>Login</a></li>
                                        <li><a href="{{ url('/register') }}" > <i class="fa fa-btn fa-user"></i>Register</a></li>
                                    @else
                                        <li><a href="{{ url('/'.Auth::user()->name.'/') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                        <li><a href="{{ url('/'.Auth::user()->name.'/blogs') }}"><i class="fa fa-btn fa-user"></i>Blogs</a></li>
                                        <li><a href="{{ url('/'.Auth::user()->name.'/dashboard') }}"><i class="fa fa-btn fa-user"></i>Dashboard</a></li>
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    @endif
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
                    <img src="{{asset('images/mindGigs-logo-high-res.jpg')}}" alt="Logo">
                </a>
            </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                 <div  class="col-md-10">
                 <nav>
                     <!-- Menu-->
                     <ul id="menu" class="sf-menu">
                         <li>
                             <a href="/">HOME <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li> <a  href="{{ url('/faq') }}">FAQ</a></li>


                             </ul>
                         </li>
                         <li><a href="{{ url('/aboutUs') }}">ABOUT</a></li>
                         <li><a href="#">BUYER <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a class="btn btn-default" href="{{ url('/freelancers') }}">Profile</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/scoreboard') }}">Scoreboard</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard') }}">Jobs View</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/freelancers') }}">All Candidates</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">SELLER <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a class="btn btn-default" href="{{ url('/managerequest') }}">Manage Requests</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/searchjobs') }}">Jobs Search</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/managepost') }}">Manage Posts</a></li>
                                 <li><a class="btn btn-default" href="{{ url('/dashboard/create') }}">Jobs Post</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="/portpolio">PORTPOLIO </a>

                         </li>
                         <li>
                             <a href="/blogs">BLOG <i class="fa fa-angle-down"></i></a>
                             <ul>
                                 <li><a href="/blogs/create">Post</a></li>
                             </ul>
                         </li>
                         <li><a href="/contact">CONTACT</a></li>
                     </ul>
                     <!-- End Menu-->
                 </nav>
                 </div>



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
