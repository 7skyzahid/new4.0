@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<br><br>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Blog</div>

				<div class="panel-body">

					<form method="POST" action="../{{$blog->id}}" id="fb">
						{!! csrf_field() !!}


						<div class="form-group row">
							<label for="blogtitle" class="col-xs-offset-1 col-xs-2 col-form-label">Title</label>
							<div class="col-xs-7">
								<input required class="form-control" name="blogtitle" type="text" value="{{$blog->title}}" id="blogtitle">
							</div>
						</div>

						<div class="form-group row">
							<label for="blogslug" class="col-xs-offset-1 col-xs-2 col-form-label">Slug</label>
							<div class="col-xs-7">
								<input required class="form-control" name="blogslug" type="text" value="{{$blog->slug}}" id="blogslug">
							</div>
						</div>

						<div class="form-group row">
							<label for="blogbody" class="col-xs-offset-1 col-xs-2 col-form-label">Body</label>
							<div class="col-xs-7">
								<textarea required class="form-control" name="blogbody" rows="10" type="text" id="blogbody">{{$blog->body}}</textarea>
							</div>
						</div>

						<div class="form-group row">
								<button type="submit" class="col-xs-offset-5 btn btn-primary">Save Changes</button> 
								<button type="button" class="btn btn-primary" onclick="window.location.href='/{{$blog->author}}/blogs'">Cancel</button>
						</div>


					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

<script type="text/javascript">


</script>
@endsection
