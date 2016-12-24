@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<br><br>
		<div class="col-md-6 col-md-offset-3">
			<div id="testdiv">
			<h1>Jobs According To Your Required Keywords</h1><br/><br/><br/>
			@foreach($posts as $post)
			<div class="panel panel-default"> 
				<div class="panel-heading">Title: <a href="/dashboard/{{$post->id}}">{{$post->title}}</a>; by <a href="/{{$post->author}}">{{$post->author}}</a> 
					; at amount ${{$post->amount}} 
					@if($post->payment_type == "full time")
						(full time basis)
					@elseif($post->payment_type == "hourly")
						/ hour basis
					@endif	
					 &nbsp &nbsp -----> &nbsp &nbsp[{{$post->dist}} km away]
				</div>
				<div class="panel-body">
					Keywords: 	&nbsp 	{{$post->tags}}<br>
					Start Date: &nbsp 	{{$post->startdate}}<br>
					Deadline: 	&nbsp 	{{$post->deadline}}<br>
					Description:&nbsp	{{$post->description}}
				</div>
			</div>
			@endforeach

			</div>

		</div>
	</div>
</div>

@stop