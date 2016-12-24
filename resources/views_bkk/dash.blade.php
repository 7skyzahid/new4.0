@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<br><br>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Post</div>

				<div class="panel-body">

					{{ Session::token() }}

						<div class="form-group row">
							<div class="col-xs-10">
								<textarea class="col-xs-offset-1 form-control" name="post" rows="5" type="text" id="post"></textarea>
							</div>
						</div>

						<div class="form-group row">
								<button type="submit" onclick="send(event)" class="col-xs-offset-1 btn btn-primary">Post</button> <!-- this button will be connected to ajax post request to route '/searchjobs'-->
						</div>


					<div id="successMessage">old message</div>

				</div>
			</div>

			<div id="jobpanel">

			@if(count($psts) >=  1)		
			<h2>Job Posts:-</h2>
			<div class="panel panel-default" id="postspanel">
				@foreach($psts as $post)
				<div class="panel-heading" id="divph{{$post->id}}">{{$post->id}}</div>
				<div class="panel-body" id="divpb{{$post->id}}">{{$post->post}}</div>
				@endforeach
			</div>
			@endif		
			
			</div>
	
		</div>
	</div>
</div>

@section('scripts')

			<script type="text/javascript">
/*
$(document).ready(function(){

	$.get('dashboard',function(data){
    	alert(data.psts);
    });
            
});
*/
function send(event){
	event.preventDefault();
//	alert($("#post").val());

	$.ajax({
		type: "POST",
		url: "/dashboard",
		data: {pst: $("#post").val(), _token: "{{ Session::token() }}"}
	});
	$("#post").val("");
}


     
			</script>

@endsection



@stop

