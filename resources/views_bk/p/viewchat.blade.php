@extends('layouts.app')

@section('style')
@parent
    <link rel="stylesheet" href="<?php echo asset('css/profile.css')?>" type="text/css">
@endsection

@section('title')
@endsection

@section('content')
    <style>
        .modal-dialog{
            overflow-y: initial !important
        }
        .modal-body{
            height: 300px;
            overflow-y: auto;
        }
    </style>
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
            @if(!empty($chat[0]))

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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="freelancer" data-id="{{$cht->freelancer_id}}" name="user" value="{{$cht->freelancer_id}}">

                            <textarea name="msg" cols="50" rows="10"></textarea>
                            <br>
                            <input type="submit" value="Send"><span class="pull-right">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Create Offer</button></span>

</form>

                        </div>

                    </div>
                </div>
            </section>
        <!----Create Offer--->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div>
                    <div class="modal-body">
                       <form method="post" action="">

                           <div>
                           <label for="seller">As a Seller
                               <input type="radio" id="seller" name="paymentperson" value="seller">
                           </label>
                           <label for="buyer">As a Buyer
                           <input type="radio" id="buyer" data-id="{{$cht->freelancer_id}}" name="paymentperson" value="buyer">
                           </label>


                           </div>

                       </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="myFormSubmit" class="btn btn-success" name="lockanswer" value="Proced">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        @endif
        @endif
        </div>
        <div id="sellerModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div>
                        <div class="modal-body">
                        <form name="requestoffer">
                                <div id="sellerContainer">
                                <p id="offertitle"></p>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" id="offersubmit"  class="btn btn-success" name="selectoffer" value="SelectOffer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="offerclose()">Close</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!---OFFER-REQUEST-->
        <div id="offerReqquestModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div>
                        <div class="modal-body">
                            <form name="sendoffer" method="post" action="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="postid"id="paymentid">
                               <h1>Offer Request Modal</h1>
                                <h4 id="username"></h4>
                                <p id="authorpost"></p>
                                <p id="paymenttype"></p>
                                <p id="deadline"></p>
                                <div>
                                    <label for="proposal">Proposal
                                        <textarea placeholder="Place Your Offer" name="proposal"></textarea>
                                    </label>
                                    <label for="deliverytime">Delivery Time
                                        <input type="date">
                                    </label>
                                    <label for="amount">
                                        <input type="text" placeholder="$5" name="amount">
                                    </label>
                                    <label for="revision" name="revision">
                                        <select>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </label>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" id="buyersubmit"  class="btn btn-success" name="" value="SelectOffer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="BuyerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Buyer Modal</h4>
                </div>
                <div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div id="buyerContainer">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <p></p>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="buyersubmitoffer"  class="btn btn-success" name="buyersubmitoffer" value="Select Post">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>

            </div>
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
        $('#myFormSubmit').click(function(e){
            e.preventDefault();

            if($('#seller').is(':checked')){
                   var dataId = $('#freelancer').data('id');

                   var url = 'fetchofferproject/'+dataId;

                    $.ajax({
                        type: "GET",
                        url: url,
                        data: {'id': dataId}, // serializes the form's elements.
                        success: function(data)
                        {

                            var htmlText = '';

                            for ( var key in data ) {

                                var projectpostid = data[key].projpost_id;
                                htmlText += '<form method="post" action="" name="selectofferform" onsubmit="selectoffer(e)">' +
                                        '<input type="hidden" id="projectpostId" data-id="'+projectpostid+'"> ' +
                                        '<p class="p-desc">Title: ' + data[key].title + '</p>';
                                htmlText += '<p class="p-desc"> Description: ' + data[key].description + '</p>';
                                htmlText += '<p class="p-desc"> Amount: ' + data[key].amount + '</p>';
                                htmlText += '<p class="p-created"> Created by: ' + data[key].author + '</p>';
                                htmlText += ' <input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="checkbox" name="projectid" class="checkboxvalue" value="'+data[key].projpost_id+'"></div><hr></form>';

                            }
                            $('#sellerContainer').append(htmlText);
                            $('#myModal').modal('hide').fadeOut('slowly');

                            $('#sellerModal').modal('show');
                            $('#sellerContainer').append();
                        }
                    });
                    e.preventDefault(); // avoid to execute the actual submit of the form.
            }
            else if($('#buyer').is(':checked')){
                var buyerid = $('#buyer').data('id');
                var burl = 'buyeroffer/'+buyerid;

                $.ajax({
                    type: "GET",
                    url: burl,
                    data: {'id': buyerid}, // serializes the form's elements.
                    success: function(data) {
                        var htmlText = '';

                        for (var key in data) {
                            var postid = data[key].id;
                            htmlText += '<form method="post">' +
                                    '<input type="hidden" id="postid" data-id="' + postid + '"> ' +
                                    '<p class="title">Title: ' + data[key].title + '</p>';
                            htmlText += '<p class="description"> Description: ' + data[key].description + '</p>';
                            htmlText += '<p class="amount"> Amount: ' + data[key].payment_type + '</p>';
                            htmlText += '<p class="createdby"> Created by: ' + data[key].author + '</p>';
                            htmlText += '<input type="checkbox" name="buyerid" class="buyercheckbox" value="'+postid+'"></div><hr></form>';

                        }
                        $('#buyerContainer').append(htmlText);
                        $('#myModal').modal('hide').fadeOut('slowly');

                        $('#BuyerModal').modal('show');
                        $('#buyerContainer').append();

                    }

                });
            }
            else {
                alert('check at least one option');
            }

        });
        function offerclose() {

            $("#sellerModal").on('hidden.bs.modal', function () {
                $(this).data('bs.modal', null);
            });
        }
        $('#offersubmit').click(function (e) {

            e.preventDefault();

            if($('.checkboxvalue').is(':checked')){
                var checkedValue = $('.checkboxvalue:checked').val();
                var getURL = 'offerrequest/'+checkedValue;
                $.ajax({
                    type: "GET",
                    url: getURL,
                    data: {'id': checkedValue}, // serializes the form's elements.
                    success: function(data)
                    {
                        var user = data.author
                        $('#offerReqquestModal').modal('show');
                        $('#username').text(user);
                        $('#authorpost').text(data.description);
                        $('#deadline').text(data.deadline);
                        $('#paymenttype').text(data.payment_type);
                        $('#paymentid').text(data.id);
                        $('#sellerModal').modal('hide');
                        document.sendoffer.action = "sendoffer/"+user;

                    }
                });
            }
            else {
                alert('please check one offer');
            }

        });

        //for Buyer
        $('#buyersubmitoffer').click(function (e) {
                    e.preventDefault();
            if($('.buyercheckbox').is(':checked')){

                var buyerid = $('.buyercheckbox:checked').val();

                var getURL = 'buyerrequest/'+buyerid;
                $.ajax({
                    type: "GET",
                    url: getURL,
                    data: {'id': buyerid}, // serializes the form's elements.
                    success: function(data)
                    {
                    }
                });
            }
            else {
                alert('please check one offer');
            }

        });

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