@extends('layouts.app')
@section('content')
    <style xmlns="http://www.w3.org/1999/html">
        body { padding-top:30px; }
        .widget .panel-body { padding:0px; }
        .widget .list-group { margin-bottom: 0; }
        .widget .panel-title { display:inline }
        .widget .label-info { float: right; }
        .widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
        .widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
        .widget .mic-info { color: #666666;font-size: 11px; }
        .widget .action { margin-top:5px; }
        .widget .comment-text { font-size: 12px; }
        .widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }

    </style>
    <div class="container">
        <div class="row">

            <div class="panel panel-default widget">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span>
                    <h3 class="panel-title">
                        Messages</h3>


                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    @if(isset($inboxmessages))
                        @foreach($inboxmessages as $messages)
                        <li class="list-group-item">

                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-11">
                                    <div>
                                        <a href="#">
                                            {{$messages->payment_type}}</a>
                                        <div class="mic-info">
                                            By: <a href="#">{{$messages->author}}</a> Deadline :: {{$messages->deadline}}
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                        {{$messages->description}}
                                    </div>
                                    <form method="post" action="reply">
                                        <input type="hidden" name="bidid" value="{{$messages->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="projectid" value="{{$messages->projpost_id}}">
                                        <input type="hidden" name="reciever" value="{{$messages->recieverid}}">
                                        <input type="hidden" name="sender" value="{{$messages->sender}}">
                                        <button class="btn btn-sm btn-hover btn-info" type="submit"><span class="glyphicon glyphicon-share-alt" style="padding-right:3px;"></span>Reply</button>
                                        <a href="#" class="btn btn-sm btn-hover btn-warning"><span class="glyphicon glyphicon-remove" style="padding-right:3px;"></span>Delete</a>
                                    </form>


                                </div>
                            </div>
                        </li>

                            @endforeach
                        @endif

                    </ul>

                </div>
            </div>
        </div>
    </div>

@stop