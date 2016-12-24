@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<br><br>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Write A New Blog</div>

				<div class="panel-body">

					<form method="POST" action="../blogs" id="fb">
						{!! csrf_field() !!}


						<div class="form-group row">
							<label for="blogtitle" class="col-xs-offset-1 col-xs-2 col-form-label">Title</label>
							<div class="col-xs-7">
								<input required class="form-control" name="blogtitle" type="text" id="blogtitle">
							</div>
						</div>

						<div class="form-group row">
							<label for="blogbody" class="col-xs-offset-1 col-xs-2 col-form-label">Body</label>
							<div class="col-xs-7">
								<textarea required class="form-control" name="blogbody" rows="10" type="text" id="blogbody"></textarea>
							</div>
						</div>

						<div class="form-group row">
								<button type="submit" class="col-xs-offset-5 btn btn-primary">Publish</button> 
								<button type="button" class="btn btn-primary" onclick="window.location.href='../blogs'">Cancel</button>
						</div>


					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop