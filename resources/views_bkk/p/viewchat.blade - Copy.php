@extends('layouts.app')

@section('style')
@parent
    <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
@endsection

@section('title')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row main clearfix">
            <a class="js-floating-nav-trigger floating-nav-trigger" href="#"><i class=
            "icon-bars"></i><span class="close-icon">×</span></a>

            <nav class="floating-nav js-floating-nav">
                <ul class="list-unstyled">


                    <li>
                        <a href="#interests"><i class="mr-10 icon-heart"></i>Interests</a>
                    </li>
                </ul>
            </nav>


            <section class="col-md-3 card-wrapper profile-card-wrapper affix">

                <div class="card profile-card">

                <div class="row"></div>


                    <span class="profile-pic-container"></span>

                    <div class="profile-pic">

                    </div>


                    <div class="name-and-profession text-center">
                        <span class="profile-pic-container"></span>

                        <h3 itemprop="name"><span class="profile-pic-container"><b></b></span>
                        </h3>


                        <h5 class="text-muted" itemprop="jobTitle"><span class=
                        "profile-pic-container"></span>
                        </h5>
                    </div>

                    <hr>


                    <div class="contact-details clearfix">
                        <div class="detail">
                        </div>


                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-phone"></i></span><span class="info" itemprop=
                            "telephone"></span>
                        </div>


                        <div class="detail">
                            <span class="icon"><i class=
                            "icon fs-lg icon-mail"></i></span><span class="info"><a class=
                            "link" href="mailto:" itemprop=
                            "email"></a></span>
                        </div>

                    </div>

                    <hr>

                </div>
            </section>


            @if((Auth::check()== true) && (Auth::user()->name == $chat[0]->freelancer_id))

            <section class="col-md-9 card-wrapper pull-right">
                <div class="card background-card" style="min-height: 728px;">
                    <h4 class="text-uppercase">Background</h4>

                    <hr>


                    <div class="background-details">

                            <ul class="list-unstyled clear-margin">

                            @foreach($chat as $cht)

                                    <li class="card card-nested">
                                      {{$cht->msgfrom}}        Massesge <span style="background-color: #00ab6c">{{$cht->msg}}</span>
                                    </li>

                            @endforeach
                                </ul>
                        <form class="form-horizontal" name="experienceForm" id="experienceForm" method="post"
                              action="fcreatemsg">
                            {!! csrf_field() !!}
                            <input type="hidden" name="user" value="{{$cht->freelancer_id}}">

                            <textarea name="msg" cols="50" rows="10"></textarea>
                            <br>
                            <input type="submit" value="Send">
                            <br>
                            <a href="viewmsgs">Create Offer</a>

</form>

                        </div>

                    </div>
                </div>
            </section>
        @endif
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