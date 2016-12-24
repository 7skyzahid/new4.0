@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<br><br>
	@if(Session::has('success'))

<div class='alert alert-success' role='alert'>
	<strong>Success:</strong>{{ Session::get('success') }}
</div>

@endif
@if(count($errors) > 0)

<div class='alert alert-danger' role='alert'>
	<strong>Errors:</strong>
	<ul>
		@foreach($errors->all() as $error)
                <li>{{$error}}</li>
		@endforeach
	</ul>
</div>

@endif
		<div class="col-lg-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">View Skill</div>

				<div class="panel-body">
				   <table class="table table-striped">
				   	   <thead>
				   	   
				   	   	   <th>#</th>
				   	   	   <th>User Name</th>
				   	   	   <th>Company</th>
				   	   	   <th>Location</th>
				   	   	   <th>Country</th>
				   	   	   <th>Title</th>
				   	   	   <th>Role</th>
				   	   	   <th>From Month</th>
				   	   	   <th>From Year</th>
				   	   	   <th>To Month</th>
				   	   	   <th>To Year</th>
				   	   	   <th>Current</th>
				   	   	   <th>Description</th>
				   	   	   <th>Skill Added At</th>
				   	   	   <th>Edit</th>
				   	   	   <th>Delete</th>
				   	   </thead>
				   	   <tbody>
				   	   	   @foreach($skills as $skill)

				   	   	       <tr><td>{{ $skill->id }}</td>
				   	   	       <td>{{ $skill->username }}</td>
				   	   	       <td>{{ $skill->company }}</td>
				   	   	       <td>{{ $skill->location }}</td>
				   	   	       <td>{{ $skill->country }}</td>
				   	   	       <td>{{ $skill->title }}</td>
				   	   	       <td>{{ $skill->role }}</td>
				   	   	       <td>{{ $skill->fmonth }}</td>
				   	   	       <td>{{ $skill->fyear }}</td>
				   	   	       <td>{{ $skill->tomonth }}</td>
				   	   	       <td>{{ $skill->toyear }}</td>
				   	   	       <td>{{ $skill->current }}</td>
				   	   	       <td>{{ $skill->description }}</td>
				   	   	       <td>{{ $skill->created_at }}</td>
				   	   	       <td><a href="editSkill/{{$skill->id}}" class="btn btn-default btn-sm">Edit</a></td>
				   	   	       <td><a href="deleteSkill/{{$skill->id}}" class="btn btn-default btn-sm">Delete</a></td>
				   	   	       <td>
				   	   	       	

				   	   	       </td>

				   	   	       </tr>


				   	   	   @endforeach
				   	   </tbody>
				   </table>

					
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
