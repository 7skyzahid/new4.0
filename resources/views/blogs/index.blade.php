@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<center><h1> All Blogs</h1></center>
			<br><br>
			@if(Auth::check()== true)
			<a href="/blogs/create"><button class="btn btn-primary">Write A New Blog</button></a><br><br>
			@endif
			
			@foreach($blogs as $blog)
			<div class="panel panel-default"> 
				<div class="panel-heading">"<a href="/blogs/{{$blog->id}}">{{$blog->title}}</a>" by <a href="/{{$blog->author}}">{{$blog->author}}</a></div>
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
			@endforeach
			<div class="pagination"> {{ $blogs->links() }}

			</div>
	</div>
</div>

@stop