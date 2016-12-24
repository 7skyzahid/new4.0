@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Post A New Job</div>

				<div class="panel-body">

					<form method="POST" action="../dashboard" id="fb">
						{!! csrf_field() !!}


						<div class="form-group row">
							<label for="title" class="col-xs-offset-1 col-xs-2 col-form-label">Title</label>
							<div class="col-xs-7">
								<input required class="form-control" name="title" type="text" id="title">
							</div>
						</div>

						<div class="form-group row">
							<label for="description" class="col-xs-offset-1 col-xs-2 col-form-label">Description</label>
							<div class="col-xs-7">
								<textarea required class="form-control" name="description" rows="10" type="text" id="description"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="tags" class="col-xs-offset-1 col-xs-2 col-form-label">Keywords</label>
							<div class="col-xs-7">
								<textarea required class="form-control" name="tags" rows="1" type="text" id="tags"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="country" class="col-xs-offset-1 col-xs-2 col-form-label">Country</label>
							<div class="col-xs-4">
								<input type="text" class="form-control" name="country">

							</div>

						</div>
                        <div class="form-group row">
                            <label for="city" class="col-xs-offset-1 col-xs-2 col-form-label">City</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="city">

                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="postalcode" class="col-xs-offset-1 col-xs-2 col-form-label">City</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="postalcode">

                            </div>

                        </div>

						<div class="form-group row">
							<label for="pt" class="col-xs-offset-1 col-xs-2 col-form-label">Payment Type</label>
							<div class="col-xs-7">
								<div class="form-control"><input type="radio" name="pt" value="full time" id="ptf" checked> Full Time</div>
								<div class="form-control"><input type="radio" name="pt" value="hourly" id="pth"> Hourly</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="startdate" class="col-xs-offset-1 col-xs-2 col-form-label">Start Date</label>
							<div class="col-xs-7">
								<input required class="form-control" name="startdate" type="date" min="2000-01-02" id="startdate">
							</div>
						</div>

						<div class="form-group row">
							<label for="deadline" class="col-xs-offset-1 col-xs-2 col-form-label">Deadline</label>
							<div class="col-xs-7">
								<input required class="form-control" name="deadline" type="date" min="2000-01-02" id="deadline">
							</div>
						</div>

						<div class="form-group row">
							<label for="amount" class="col-xs-offset-1 col-xs-2 col-form-label">Amount</label>
							<div class="col-xs-7">
								<input required class="form-control" name="amount" type="number" min="1" id="amount">
							</div>
						</div>

						<div class="form-group row">
								<button type="submit" class="col-xs-offset-5 btn btn-primary">Post</button> 
								<button type="button" class="btn btn-primary" onclick="window.location.href='/{{$authuser}}/dashboard'">Cancel</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop