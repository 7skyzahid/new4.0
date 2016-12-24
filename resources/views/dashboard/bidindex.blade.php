@extends('layouts.app')

@section('style')
@parent
<link rel="stylesheet" href="<?php echo asset('css/faq.css')?>" type="text/css"> 
@endsection

@section('content')
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<center><h1>The Posts On Which I've Bidded</h1></center><br>
			
			@foreach($posts as $post)
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
			</div>
			@endforeach
		
		</div>
	</div>
</div>

@stop