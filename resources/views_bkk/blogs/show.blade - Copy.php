@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<br><br>
		<h1>Author: <a href="/{{$blog->author}}">{{$blog->author}}</a></h1>
		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default"> 
				<div class="panel-heading"><a href="{{action('BlogsController@show',[$blog->id])}}">{{$blog->title}}</a></div>
				<div class="panel-body">
					{{$blog->body}}
				</div>
			
				@if((Auth::check()== true) && (Auth::user()->name == $blog->author))
				<div>
				<form method="POST" action="/blogs/{{$blog->id}}" id="fb">
					{{ method_field('DELETE') }}
    				{{ csrf_field() }}
					<button type="button" class="btn btn-primary" onclick="window.location.href='/blogs/{{$blog->id}}/editblog'">Edit</button>					
					<button type="submit" class="btn btn-primary" >Delete</button>
				</form>
				</div>
				@endif

			</div>

		</div>

		
	</div>
</div>

@stop