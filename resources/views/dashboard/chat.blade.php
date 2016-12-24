@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>messages chat widget - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #ebeef0;
        }

        .panel {
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.075);
            border-radius: 0;
            border: 0;
            margin-bottom: 24px;
        }

        .panel .panel-heading, .panel > :first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .panel-heading {
            position: relative;
            height: 50px;
            padding: 0;
            border-bottom: 1px solid #eee;
        }

        .panel-control {
            height: 100%;
            position: relative;
            float: right;
            padding: 0 15px;
        }

        .panel-title {
            font-weight: normal;
            padding: 0 20px 0 20px;
            font-size: 1.416em;
            line-height: 50px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .panel-control > .btn:last-child, .panel-control > .btn-group:last-child > .btn:first-child {
            border-bottom-right-radius: 0;
        }

        .panel-control .btn, .panel-control .dropdown-toggle.btn {
            border: 0;
        }

        .nano {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .nano > .nano-content {
            position: absolute;
            overflow: scroll;
            overflow-x: hidden;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .pad-all {
            padding: 15px;
        }

        .mar-btm {
            margin-bottom: 15px;
        }

        .media-block .media-left {
            display: block;
            float: left;
        }

        .img-sm {
            width: 46px;
            height: 46px;
        }

        .media-block .media-body {
            display: block;
            overflow: hidden;
            width: auto;
        }

        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }

        .speech {
            position: relative;
            background: #b7dcfe;
            color: #317787;
            display: inline-block;
            border-radius: 0;
            padding: 12px 20px;
        }

        .speech:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            left: 0;
            top: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-right: 7px solid #b7dcfe;
            margin: 15px 0 0 -6px;
        }

        .speech-right > .speech:before {
            left: auto;
            right: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #ffdc91;
            border-right: 0;
            margin: 15px -6px 0 0;
        }

        .speech .media-heading {
            font-size: 1.2em;
            color: #317787;
            display: block;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            padding-bottom: 5px;
            font-weight: 300;
        }

        .speech-time {
            margin-top: 20px;
            margin-bottom: 0;
            font-size: .8em;
            font-weight: 300;
        }

        .media-block .media-right {
            float: right;
        }

        .speech-right {
            text-align: right;
        }

        .pad-hor {
            padding-left: 15px;
            padding-right: 15px;
        }

        .speech-right > .speech {
            background: #ffda87;
            color: #a07617;
            text-align: right;
        }

        .speech-right > .speech .media-heading {
            color: #a07617;
        }

        .btn-primary, .btn-primary:focus, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open > .btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
            background-color: #579ddb;
            border-color: #5fa2dd;
            color: #fff !important;
        }

        .btn {
            cursor: pointer;
            /* background-color: transparent; */
            color: inherit;
            padding: 6px 12px;
            border-radius: 0;
            border: 1px solid 0;
            font-size: 11px;
            line-height: 1.42857;
            vertical-align: middle;
            -webkit-transition: all .25s;
            transition: all .25s;
        }

        .form-control {
            font-size: 11px;
            height: 100%;
            border-radius: 0;
            box-shadow: none;
            border: 1px solid #e9e9e9;
            transition-duration: .5s;
        }

        .nano > .nano-pane {
            background-color: rgba(0, 0, 0, 0.1);
            position: absolute;
            width: 5px;
            right: 0;
            top: 0;
            bottom: 0;
            opacity: 0;
            -webkit-transition: all .7s;
            transition: all .7s;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="col-md-12 col-lg-10">
        <div class="panel">
            <!--Heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button" data-toggle="collapse"
                                data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Available</a></li>
                            <li><a href="#">Busy</a></li>
                            <li><a href="#">Away</a></li>
                            <li class="divider"></li>
                            <li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a>
                            </li>
                            <li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a></li>
                        </ul>
                    </div>
                </div>
                <h3 class="panel-title">Chat</h3>
            </div>

            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">

                <div class="nano has-scrollbar" style="height:380px">
                    <div class="nano-content pad-all" tabindex="0" style="">
                        <ul class="list-unstyled media-block appendcontainer" id="chat">
                            @if(isset($messages))

                                @foreach($messages as $mess)
                                    @if($mess->type == 'buyer')
                                    <li class="mar-btm">
                                        <div class="media-left">
                                            <img src="http://bootdey.com/img/Content/avatar/avatar1.png"
                                                 class="img-circle img-sm" alt="Profile Picture">
                                        </div>
                                        <div class="media-body pad-hor">
                                            <div class="speech">
                                                <a href="#" class="media-heading">{{$mess->name}}</a>
                                                <p>{{$mess->message}}</p>
                                                <p class="speech-time">
                                                    <i class="fa fa-clock-o fa-fw"></i> 09:25
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <li class="mar-btm">
                                        <div class="media-right">
                                            <img src="http://bootdey.com/img/Content/avatar/avatar2.png"
                                                 class="img-circle img-sm" alt="Profile Picture">
                                        </div>
                                        <div class="media-body pad-hor speech-right">
                                            <div class="speech">
                                                <a href="#" class="media-heading">{{Auth::user()->name}}</a>
                                                <p>{{$mess->message}}</p>
                                                <p class="speech-time">
                                                    <i class="fa fa-clock-o fa-fw"></i> 09:27
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="nano-pane">
                        <div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div>
                    </div>
                </div>

                <!--Widget footer-->
                <form action="" id="sendmessage" name="sendmessage">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-9">
                                <input type="hidden" id="senderid" name="senderid" value="{{$sender}}">
                                <input type="hidden" class="messageid_current" name="chatid">
                                <input type="hidden" id="recieverid" name="reciever" value="{{$reciever}}">
                                @if(isset($type))
                                    <input type="hidden" id="usertype" name="usertype" value="{{$type}}">
                                @else
                                    <input type="hidden" id="usertype" name="usertype" value="buyer">
                                @endif

                                <input type="hidden" id="projectid" name="projectid" value="{{$projectid}}">
                                <input type="hidden" id="bidid" name="bidid" value="{{$bidid}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="message" id="message" placeholder="Enter your text"
                                       class="form-control chat-input">
                            </div>
                            <div class="col-xs-3">message
                                <button class="btn btn-primary btn-block" id="send" type="submit">Send</button>
                                <button class="btn btn-success btn-block" id="createoffer" data-toggle="modal" data-target="#myModal" type="">Create Offer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--Create Offer Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/addorder">
                    <div class="row">

                        <div class="col-md-12">
                            <table class="responsive">
                                <tr>
                                    <td>
                                       Describe Your offer
                                    </td>
                                    <td>
                                        <textarea name="description" class="form-control pull-right" id="description" style="width: 377px; height: 90px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Select Duration</td>
                                    <td> <select class="form-control pull-right" name="duration">
                                            <option value="oneday">1 Day</option>
                                            <option value="twodays">2 Days</option>
                                            <option value="threedays">3 Days</option>
                                            <option value="fourdays">4 Days</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td> Amount Offer</td>
                                    <td> <input type="text" class="form-control pull-right" name="amountoffer" id="amount" placeholder="$ 1500 max"></td>
                                </tr>
                                <tr>
                                    <br>
                                    <td>Number of Revision (Optional)</td>
                                    <td>
                                        <select name="revision">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Card No:</td>
                                    <td><input name="cardNumber" type="text" id="name" /></td>
                               <tr>
                                    <td>Card Expiry:</td>
                                    <td><input name="cardExpiry" type="text" id="name" /></td>
                                </tr>
                                <tr>
                                    <td>Card CVC:</td>
                                    <td><input name="cardCVC" type="text" id="name" /></td>
                                </tr>
                                <tr>
                                    <td>Subscription:</td>
                                    <td> <input name="subscribed" type="checkbox" id="name" /></td>
                                </tr>

                            </table>

                            <input type="hidden" id="senderid" name="senderid" value="{{$sender}}">
                            <input type="hidden" id="recieverid" name="reciever" value="{{$reciever}}">
                            @if(isset($type))
                                <input type="hidden" id="usertype" name="usertype" value="{{$type}}">
                            @else
                                <input type="hidden" id="usertype" name="usertype" value="buyer">
                            @endif

                            <input type="hidden" id="projectid" name="projectid" value="{{$projectid}}">
                            <input type="hidden" id="bidid" name="bidid" value="{{$bidid}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>



                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Submit Offer</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var currentid ;
    $("#sendmessage").submit(function (event) {
        event.preventDefault();
        message = $('#message').val();
        senderid = $('#senderid').val();
        recieverid = $('#recieverid').val();
        bidid = $('#bidid').val();
        chatid = $('.messageid_current').val();
        url = '/messagesent';

        $.ajax({
            type: "POST",
            url: url,
            data: $("#sendmessage").serialize(), // serializes the form's elements.
            success: function (data) {
                var freelancertext = '';
                var buyertext = '';
                if (data) {
                    var parseData = JSON.parse(data);
                    name = parseData.name;
                    var chatid = parseData.message_id;
                    currentid = chatid;

                    $('.messageid_current').val(chatid);

                    messagetext = parseData.message;
                    chattype = parseData.type;

                    userid = parseData.userid;
                    messagetext = parseData.message;
                    recieverid = parseData.recieverid;
                    projectid = parseData.projpostid;

                    if (chattype == 'Freelancer') {
                        freelancertext += '<li class="mar-btm"><div class="media-right">';
                        freelancertext += '<img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture"></div>';
                        freelancertext += '<div class="media-body pad-hor speech-right"><div class="speech">';
                        freelancertext += '<a href="#" class="media-heading">' + name + '</a>';
                        freelancertext += ' <p>' + messagetext + '</p>';
                        freelancertext += ' <p class="speech-time">';
                        freelancertext += '<i class="fa fa-clock-o fa-fw"></i> 09:25 </p>';
                        freelancertext += ' </div> </div></li>';

                    }
                    if (chattype == 'buyer') {
                        buyertext += '<li class="mar-btm"><div class="media-left">';
                        buyertext += '<img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture"></div>';
                        buyertext += ' <div class="media-body pad-hor"><div class="speech">';
                        buyertext += '<a href="#" class="media-heading">' + name + '</a>';
                        buyertext += ' <p>' + messagetext + '</p>';
                        buyertext += ' <p class="speech-time">';
                        buyertext += '<i class="fa fa-clock-o fa-fw"></i> 09:25 </p>';
                        buyertext += ' </div> </div></li>';
                    }
                }
                $('.appendcontainer').append(buyertext);
                $('.appendcontainer').append(freelancertext);

            }
        });
        event.preventDefault();


    });

</script>
</body>
</html>

@stop