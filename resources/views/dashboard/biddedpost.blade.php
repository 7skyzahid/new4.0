@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <center><h1>Bidded Posts</h1></center>

                @foreach($biddedposts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">Title: <a href="/dashboard/{{$post->id}}">{{$post->title}}</a>; by <a href="/{{$post->author}}">{{$post->author}}</a>
                            ; at amount ${{$post->amount}}
                            @if($post->payment_type == "full time")
                                (full time basis)
                            @elseif($post->payment_type == "hourly")
                                / hour basis
                            @endif

                        </div>
                        <div class="panel-body">
                            Keywords: 	&nbsp 	{{$post->tags}}<br>
                            Start Date: &nbsp 	{{$post->startdate}}<br>
                            Deadline: 	&nbsp 	{{$post->deadline}}<br>
                            Description:&nbsp	{{$post->description}}
                        </div>

                        @if((Auth::check()== true) && (Auth::user()->name == $post->author))
                            <div>
                                <form method="POST" action="dashboard/{{$post->id}}" id="fb">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='dashboard/{{$post->id}}/editpost'">Edit</button>
                                    <button type="submit" class="btn btn-primary" >Delete</button>
                                </form>
                            </div>
                        @elseif((Auth::check()== true) && (Auth::user()->name != $post->author) && ($post->status != "awarded"))
                            <div id="notifier{{$post->id}}" style="background-color:green;color:white;display:none;">Your bid has successfully been placed!</div>

                            <div id="testdiv"></div>

                        @endif

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
@stop


@section('scripts')

@endsection