@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			@if(Auth::user()->name == $id)
			<center><h1>Jobs Posted By: Me</h1></center><br>
			@else
			<center><h1>Jobs Posted By: {{$id}}</h1></center><br>
			@endif
			
			@if((Auth::check() == true) && (Auth::user()->name == $id))
			<a href="{{action('DashboardController@create')}}"><button class="btn btn-primary">Post A New Job</button></a><br><br>
                    <a href="{{action('DashboardController@showbiddedpost')}}"><button class="btn btn-primary">Show Bidded Post</button></a><br><br>
			@endif
			
			@foreach($posts as $post)
			<div class="panel panel-default"> 
				<div class="panel-heading">Title: <a href="dashboard/{{$post->id}}">{{$post->title}}</a>
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
					<div class="toggle">
						<div class="toggle-title">
							<button type="button" class="btn btn-primary title-name togglecloser" id="pressbid{{$post->id}}" onclick="opentoggle({{$post->id}})">Bid</button>
						</div>


						<div class="toggle-inner">
							
							<div class="form-group row">
								<label for="biddesc" class="col-xs-offset-1 col-xs-3 col-form-label">Why should we hire you?</label>
								<div class="col-xs-7">
									<textarea required class="form-control" name="biddesc{{$post->id}}" placeholder="Why should we hire you?" rows="3" type="text" id="biddesc{{$post->id}}"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="amount" class="col-xs-offset-1 col-xs-3 col-form-label">Amount</label>
								<div class="col-xs-7">
									<input required class="form-control" name="amount{{$post->id}}" type="number" min="1" id="amount{{$post->id}}">
								</div>
							</div>

							<div class="form-group row col-xs-offset-4">
								<button type="button" class="btn btn-primary title-name" id="submitbid{{$post->id}}" onclick="placebid({{$post->id}})">Submit Bid</button>
								<button type="button" class="btn btn-primary title-name" id="cancelbid{{$post->id}}" onclick="closetoggle({{$post->id}})">Cancel Bid</button>
							</div>
						</div>
					</div>
					<div id="testdiv"></div>

				@endif
				
			</div>
			@endforeach
		
		</div>
	</div>
</div>

@stop


@section('scripts')
<script type="text/javascript">

	function opentoggle(id){
		$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
		$("#pressbid"+id).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);	
	}

	function closetoggle(id){
		$("#biddesc"+id).val("");
		$("#amount"+id).val("");
		jQuery(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
	}

	function placebid(id){
		$.ajax({
			type: "POST",
			url: "/jobpost",
			data: {postid: id, description: $("#biddesc"+id).val(), amount: $("#amount"+id).val(),  _token: "{{ Session::token() }}"},
			success: function(result){
	    					$("#biddesc"+id).val("");
							$("#amount"+id).val("");
							$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
							$("#notifier"+id).show().delay( 5000 ).hide(0);
	        }
		});
		
	}

</script>
@endsection