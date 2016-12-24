@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<br><br>
		<div class="ph col-xs-2">
			<div class="ph">Search Jobs or Professionals</div>
			<div class="pb">
				<div ><input required style="width: inherit;" class="col-xs-8" placeholder="Enter keywords" name="searchbar" type="text" id="searchbar"/></div>
				<br><br><div ><input type="radio" name="searchtype" value="for job" id="ffj"> For Finding Jobs</div>
				<div ><input type="radio" name="searchtype" value="for prof" id="ffp"> For Finding Professionals</div>
				<button type="button" class="btn btn-primary" onclick="searchbtn()">Search</button> 			
									
			</div>
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div id="testdiv">
			<h1>Jobs According To Your Required Keywords</h1><br/><br/><br/>


				@foreach($arr as $post)
					{{$post->username}}
			<div class="panel panel-default"> 
				<div class="panel-heading">Experties in : <a href="/dashboard/{{$post->id}}">{{$post->title}}</a>; by <a href="/{{$post->username}}">{{$post->username}}</a>
					; at amount
					@if($post->username == "full time")
						(full time basis)
					@elseif($post->username == "hourly")
						/ hour basis
					@endif	
					 &nbsp &nbsp -----> &nbsp &nbsp[{{$post->username}} km away]
				</div>
				<div class="panel-body">
					Keywords: 	&nbsp 	{{$post->username}}<br>
					Start Date: &nbsp 	{{$post->username}}<br>
					Deadline: 	&nbsp 	{{$post->username}}<br>
					Description:&nbsp	{{$post->username}}
				</div>
			</div>
			@endforeach

			</div>

		</div>
	</div>
</div>

@stop


@section('scripts')
<script type="text/javascript">
	
	$('.ph').css({"border-color": "#C1E0FF", 
             "border-weight":"1px", 
             "border-style":"solid"});
	


	function searchbtn(){

		var str = "";

		if($('#ffj').is(':checked')) { 
			$.ajax({
				type: "POST",
				url: "/searchjobs",
				data: {tosearch: $("#searchbar").val(), _token: "{{ Session::token() }}"},
				success: function(result){
					str = str + "<h1>Professionals According To Required Skills</h1><br/><br/><br/>";	
					for(var i=0;i<result.posts.length;i++){
		 				str = str + "<div class='panel panel-default'>"; 
						str = str + "<div class='panel-heading'>Title: <a href='/dashboard/"+result.posts[i].id+"'>"+ result.posts[i].title +"</a>; by <a href='/"+result.posts[i].author+"'>"+result.posts[i].author+"</a> ; at amount " +result.posts[i].amount; 
						
						if (result.posts[i].payment_type == 'full time')
							str = str + "(full time basis)";
						else 
							str = str + "/ hour basis";
						str = str + " &nbsp &nbsp -----> &nbsp &nbsp[" +result.posts[i].dist+" km away]</div>"	
						str = str + "<div class='panel-body'>";
						str = str + "Keywords: 	&nbsp 	"+result.posts[i].tags+"<br>";
						str = str + "Start Date: &nbsp 	"+result.posts[i].startdate+"<br>";
						str = str + "Deadline: 	&nbsp 	"+result.posts[i].deadline+"<br>";
						str = str + "Description:&nbsp	"+result.posts[i].description;
						str = str + "</div>";

						str = str + "</div>";
					}	

					console.log(result.posts[1]);

					document.getElementById("testdiv").innerHTML = str;
		        }
			});		
		}
		else {
		//	console.log("lol"); 
			$.ajax({
				type: "POST",
				url: "/searchprofs",
				data: {tosearch: $("#searchbar").val(), _token: "{{ Session::token() }}"},
				success: function(result){
					str = str + "<h1>Professionals According To Required Skills</h1><br/><br/><br/>";	
					for(var i=0;i<result.profs.length;i++){
		 				str = str + "<div class='panel panel-default'>"; 
						str = str + "<div class='panel-heading'>User: <a href='/"+result.profs[i].username+"'>"+result.profs[i].username+"</a> | Brief Info: " +result.profs[i].briefdescription+ "&nbsp &nbsp [" +result.profs[i].dist+" km away]</div>"; 
						str = str + "<div class='panel-body'>";
						str = str + "Keywords: 	&nbsp 	"+result.profs[i].keywords+"<br>";

						if (result.profs[i].city != '' && result.profs[i].country != '')
							str = str + "From: 	&nbsp 	"+result.profs[i].city+", "+result.profs[i].country+"<br>";
						
						str = str + "About: 	&nbsp 	"+result.profs[i].about+"<br>";
						str = str + "</div>";

						str = str + "</div>";
					}	
					document.getElementById("testdiv").innerHTML = str;
		        }
			});		
		}


	}


</script>
@endsection