@extends('layouts.app')

@section('style')
@parent
    <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
@endsection

@section('title')
@endsection

@section('content')

<!-- Title Section -->
<section class="title-section">
    <div class="container">
        <!-- crumbs -->
        <div class="row crumbs">
            <div class="col-md-12">
                <a href="index.html">Home</a> / <a href="#">Features</a> / <a href="#">Pages </a> / Page Left Sidebar
            </div>
        </div>
        <!-- End crumbs -->

        <!-- Title - Search-->
        <div class="row title">
            <!-- Title -->
            <div class="col-md-9">
                <h1>Page Left Sidebar
                    <span class="subtitle-section">
                                Page Styles
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

            <div class="col-md-8">
                <h2>Left <strong>Sidebar</strong> Page</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-lg-9 col-lg-offset-1">
                            <div class="chat_window">
                                <div class="top_menu">
                                    <div class="title">Discussion</div>
                                </div>
                                <ul class="messages"></ul>
                                <div class="bottom_wrapper clearfix">
                                    <div class="message_input_wrapper"><input class="message_input"
                                                                              placeholder="Type your message here..."/>
                                    </div>
                                    <div class="send_message">
                                        <div class="icon"></div>
                                        <div class="text">Send</div>
                                    </div>
                                </div>
                            </div>
                            <div class="message_template">
                                <li class="message">
                                    <div class="avatar avatarImage">
                                        <img src="sdf" class="userImage"/>
                                    </div>
                                    <div class="text_wrapper">
                                        <div class="avatarName"><strong></strong></div>
                                        @if (! Auth::guest())
                                            <a href="#" class="pull-right discussionButton"><span
                                                        class="glyphicon glyphicon-remove "></span></a>
                                            <div class="text"></div>
                                        @endif
                                    </div>

                                </li>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Container-->
</section>
<!-- End Works-->

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
           var toggleFloatingMenu = function() {
             $( '.js-floating-nav' ).toggleClass( 'is-visible' );
             $( '.js-floating-nav-trigger' ).toggleClass( 'is-open' );
           };

           $( ".background-card" ).css( "min-height", window.screen.availHeight + "px" );
           $( "[data-toggle=tooltip]" ).tooltip();
           $( '.js-floating-nav-trigger' ).on( 'click', function(e) {
             e.preventDefault();
             toggleFloatingMenu();
           });
           $( '.js-floating-nav a' ).on( 'click', toggleFloatingMenu );

           $("#remaining-profiles").on('show.bs.collapse', function() {
             $( '.js-profiles-collapse > i' )
               .removeClass( 'icon-chevron-down' )
               .addClass( 'icon-chevron-up' );
           });

           $("#remaining-profiles").on('hidden.bs.collapse', function() {
             $( '.js-profiles-collapse > i' )
               .removeClass( 'icon-chevron-up' )
               .addClass( 'icon-chevron-down' );
           });
          });
    </script>
    <script>
          WebFontConfig = {
           google: { families: [ 'Lato:300,400,700:latin' ] }
          };
          (function() {
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
          /* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/<\/g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */


         
    </script>

@endsection