@extends('layouts.app')

@section('style')
@parent
<link rel="stylesheet" href="<?php echo asset('css/faq.css')?>" type="text/css"> 
@endsection

@section('content')
<div class="container">
	<div class="row">
		<br><br>
		<h1>Job Posted By: <a href="/{{$post->author}}">{{$post->author}}</a></h1>
		<div class="col-md-6 col-md-offset-3">
			
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
					Start Date: &nbsp	{{$post->startdate}}<br>
					Deadline: 	&nbsp 	{{$post->deadline}}<br>
					Description:&nbsp	{{$post->description}}
				</div>
			
				@if((Auth::check()== true) && (Auth::user()->name == $post->author))
				<div>
				<form method="POST" action="/dashboard/{{$post->id}}" id="fb">
					{{ method_field('DELETE') }}
    				{{ csrf_field() }}
					<button type="button" class="btn btn-primary" onclick="window.location.href='/dashboard/{{$post->id}}/editpost'">Edit</button>					
					<button type="submit" class="btn btn-primary" >Delete</button>
				</form>
				</div>
				@elseif((Auth::check()== true) && (Auth::user()->name != $post->author) && ($post->status != "awarded"))
					<div id="notifier{{$post->id}}" style="background-color:green;color:white;display:none;">Your bid has successfully been placed!</div>
					<div class="toggle">
						<div class="toggle-title">
							<button type="button" class="btn btn-primary title-name togglecloser" id="pressbid{{$post->id}}" onclick="openbidtoggle({{$post->id}})">Bid</button>
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
								<button type="button" class="btn btn-primary title-name" id="cancelbid{{$post->id}}" onclick="closebidtoggle({{$post->id}})">Cancel Bid</button>
							</div>
						</div>
					</div>
					<div id="testdiv"></div>
				@elseif((Auth::check()== true) && (Auth::user()->name != $post->author) && ($post->status == "awarded"))
					<center><h3>SORRY...THIS PROJECT HAS BEEN AWARDED !</h3></center>
				@endif

			</div>

			@if((Auth::check()== true) && (Auth::user()->name == $post->author))
			<br><br><h2>Bids:</h2>
				@if(count($bids)>0)
				<br><br>
				<div class="panel panel-default"> 
					
					@foreach($bids as $bid)
					
					<div class="panel-heading">Bided amount: {{$bid->amount}}; by <a href="/{{$bid->username}}">{{$bid->username}}</a></div>
					<div class="panel-body">
						Why me:<br> &nbsp
						{{$bid->description}}
					</div>
					@if($post->status == "waiting")
						<div id="notifier{{$bid->id}}" style="background-color:green;color:white;display:none;">This bid has successfully been accepted... you can no longer change your option!</div>
						<div class="toggle statchange">
							<div class="toggle-title">
								<button type="button" class="btn btn-primary title-name togglecloser" id="acceptbidbtn{{$bid->id}}" onclick="opentoggle({{$bid->id}})">Accept Bid</button>
							</div>
							<div class="toggle-inner">
								
								<div class="form-group row">
									Are you sure you want to accept this bid? (Once accepted, your decision cant be changed)
								</div>

								<div class="form-group row col-xs-offset-4">
									<button type="button" class="btn btn-primary title-name" id="yestobid{{$bid->id}}" onclick="acceptbid({{$post->id}},{{$bid->id}})">Yes</button>
									<button type="button" class="btn btn-primary title-name" id="notobid{{$bid->id}}" onclick="closetoggle({{$bid->id}})">No</button>
								</div>
							</div>
						</div>
					@elseif($bid->acceptstatus == 1)
						<div id="notifier{{$bid->id}}" style="background-color:green;color:white;">This bid has successfully been accepted... you can no longer change your option!</div>
					@endif
					
					@endforeach

				</div>
				@else
					<h3>No one have placed their bid yet!</h3>
				@endif
			@elseif((Auth::check()== true) && (Auth::user()->name != $post->author))
			<br><br><h2>My Bids:</h2>
				@if(count($bids->where('username',Auth::user()->name))>0)
				<br><br>
				<div class="panel panel-default" id="userbidpanel"> 
					
					@foreach($bids->where('username',Auth::user()->name) as $bid)
					
					<div class="panel-heading">Bided amount: {{$bid->amount}}</div>
					<div class="panel-body">
						Why me:<br> &nbsp
						{{$bid->description}}
						<br><br>
						Status: &nbsp 
						@if(($bid->acceptstatus == 0) && ($post->status == "waiting"))
							Waiting...
						@elseif(($bid->acceptstatus == 0) && ($post->status == "awarded"))
							Sorry! This project has been already been awarded...
						@else
							Congrats, Bid Accepted!
						@endif	
					</div>					
					@endforeach

				</div>
				@else
					<h3>You haven't placed any bid on this job post yet!</h3>
				@endif

			@endif

		</div>

		
	</div>
</div>

@stop


@section('scripts')
<script type="text/javascript">

	/*Place Bid JS Starts*/

	function openbidtoggle(id){
		$("#pressbid"+id).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);	
	}

	function closebidtoggle(id){
		$("#biddesc"+id).val("");
		$("#amount"+id).val("");
		$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
	}

	function placebid(id){
		$.ajax({
			type: "POST",
			url: "/jobpost",
			data: {postid: id, description: $("#biddesc"+id).val(), amount: $("#amount"+id).val(),  _token: "{{ Session::token() }}"},
			success: function(result){
	   						var str = "";
	   						str = str + '<div class="panel-heading">Bided amount: ' + $("#amount"+id).val() + '</div>';
							str = str + '<div class="panel-body">';
							str = str + 'Why me:<br> &nbsp '+$("#biddesc"+id).val();
							str = str + '<br><br>';
							str = str + 'Status: &nbsp'; 
							if("{{$post->status}}" == "waiting")
								str = str + 'Waiting...</div>';
							else
								str = str + 'Sorry! This project has been already been awarded...</div>';
							
							$("#userbidpanel").append(str);
	   						$("#biddesc"+id).val("");
							$("#amount"+id).val("");
							$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
							$("#notifier"+id).show().delay( 5000 ).hide(0);
		        }
		});	
	}

	/*Place Bid JS Ends*/
	/*Accept Bid JS Starts*/

	function opentoggle(id){
		$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
		$("#acceptbidbtn"+id).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);	
	}

	function closetoggle(id){
		$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
	}

	function acceptbid(pid,bid){
		$.ajax({
			type: "POST",
			url: "/jobbid",
			data: {postid: pid, bidid: bid, _token: "{{ Session::token() }}"},
			success: function(result){
							$(".togglecloser").removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
							$("div").remove(".statchange");
							$("#notifier"+bid).show();
	        }
		});
	}

	/*Accept Bid JS Ends*/

</script>
@endsection