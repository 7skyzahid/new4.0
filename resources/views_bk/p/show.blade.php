@extends('layouts.app')

@section('style')
@parent
    <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">  
@endsection

@section('title')
{{$uvar->firstname}} {{$uvar->lastname}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row main clearfix">
            <a class="js-floating-nav-trigger floating-nav-trigger" href="#"><i class=
            "icon-bars"></i><span class="close-icon">×</span></a>

            <nav class="floating-nav js-floating-nav">
                <ul class="list-unstyled">
                    <li>
                        <a href="#about"><i class="mr-10 icon-board"></i>About</a>
                    </li>

                    <li>
                        <a href="#interests"><i class="mr-10 icon-heart"></i>Interests</a>
                    </li>
                </ul>
            </nav>


            <section class="col-md-3 card-wrapper profile-card-wrapper affix">
                
                <div class="card profile-card">
                           @if((Auth::check() == true) && (Auth::user()->name == $uprof->username))
                            <a class="btn btn-primary btn-small pull-right" data-toggle="tooltip"
                            href="/{{$uprof->username}}/editprofile">Edit Profile</a> 
                            @endif
                <div class="row"></div>
                

                    <span class="profile-pic-container"></span>

                    <div class="profile-pic">
                                  <span class="profile-pic-container"><img alt="{{$uvar->firstname}} {{$uvar->lastname}}" class="media-object img-circle center-block"
                        itemprop="image" src="images/{{$uprof->profilepic}}"></span>
                    </div>


                    <div class="name-and-profession text-center">
                        <span class="profile-pic-container"></span>

                        <h3 itemprop="name"><span class="profile-pic-container"><b>{{$uvar->firstname}} {{$uvar->lastname}}</b></span>
                        </h3>


                        <h5 class="text-muted" itemprop="jobTitle"><span class=
                        "profile-pic-container">{{$uprof->briefdescription}}</span>
                        </h5>
                    </div>

                    <hr>


                    <div class="contact-details clearfix">
                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-location"></i></span><span class="info">{{$uprof->address}},{{$uprof->city}},{{$uprof->country}}</span>
                        </div>


                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-phone"></i></span><span class="info" itemprop=
                            "telephone">{{$uvar->phone}}</span>
                        </div>


                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-mail"></i></span><span class="info"><a class=
                            "link" href="mailto:{{$uvar->email}}" itemprop=
                            "email">{{$uvar->email}}</a></span>
                        </div>
                      @if($uprof->website != "")
                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-link"></i></span><span class="info"><a href=
                            "{{$uprof->website}}" target=
                            "_blank">{{$uprof->website}}</a></span>
                        </div>
                      @endif
                      @if($uprof->gitlink != "")
                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-link"></i></span><span class="info"><a href=
                            "{{$uprof->gitlink}}" target=
                            "_blank">{{$uprof->gitlink}}</a></span>
                        </div>
                      @endif
                      @if ($uprof->languages != "")
                        <div class="detail">
                            <span class="icon" title="Languages I speak"><i class=
                            "icon fs-lg icon-language"></i></span><span class="info">{{$uprof->languages}}</span>
                        </div>
                      @endif
                    </div>

                    <hr>

                    @if (!(($uprof->fblink == "") && ($uprof->twitlink == "") && ($uprof->lilink == "")))

                    <div class="social-links text-center">
                        <div>
                          @if ($uprof->fblink != "")
                            <a class="fs-2x social-link link-facebook icon-facebook"
                            data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on Facebook" data-toggle="tooltip"
                            href="{{$uprof->fblink}}" target="_blank" title=
                            ""></a>
                          @endif
                          @if ($uprof->twitlink != "")
                                <a class="fs-2x social-link link-twitter icon-twitter"
                            data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on Twitter" data-toggle=
                            "tooltip" href="{{$uprof->twitlink}}" target="_blank"
                            title=""></a>
                          @endif
                          @if ($uprof->lilink != "")
                            <a class="fs-2x social-link link-linkedin icon-linkedin"
                            data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on LinkedIn" data-toggle=
                            "tooltip" href="{{$uprof->lilink}}" target="_blank"
                            title=""></a>
                          @endif
                        </div>
                    </div>
                    @endif
                </div>
            </section>


            <section class="col-md-9 card-wrapper pull-right">
                <div class="card background-card" style="min-height: 728px;">
                    <h4 class="text-uppercase">Background</h4>

                    <hr>


                    <div class="background-details">
                        <div class="detail" id="about">
                            <div class="icon">
                                <i class="fs-lg icon-board"></i><span class="mobile-title">About</span>
                            </div>


                            <div class="info">
                                <h4 class="title text-uppercase">About</h4>


                                <div class="card card-nested">
                                    <div class="content mop-wrapper" itemprop="description">
                                        <p>{{$uprof->about}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="detail" id="interests">
                            <div class="icon">
                                <i class="fs-lg icon-heart"></i><span class=
                                "mobile-title">Interests</span>
                            </div>


                            <div class="info">
                                <h4 class="title text-uppercase">Interests</h4>


                                <div class="content">
                                    <ul class="list-unstyled clear-margin">
                                        <li class="card card-nested">
                                            @foreach (explode(', ', $uprof->interests) as $interest)
                                                <span class="label label-keyword">{{$interest}}</span>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="detail" id="keywords">                    <!-- Have to do changings here... after adding a column of keywords-->
                            <div class="icon">
                                <i class="fs-lg icon-heart"></i><span class=
                                "mobile-title">keywords</span>
                            </div>


                            <div class="info">
                                <h4 class="title text-uppercase">Keywords</h4>


                                <div class="content">
                                    <ul class="list-unstyled clear-margin">
                                        <li class="card card-nested">
                                            @foreach (explode(', ', $uprof->keywords) as $keyword)
                                                <span class="label label-keyword">{{$keyword}}</span>
                                            @endforeach
                                       </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
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