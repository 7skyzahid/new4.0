@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<br><br>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Skill</div>

				<div class="panel-body">

					<form method="POST" action="store" id="fb">
						{!! csrf_field() !!}


						<div class="form-group row">
							<label for="companytitle" class="col-xs-offset-1 col-xs-2 col-form-label">Company</label>
							<div class="col-xs-7">
								<input required class="form-control" name="company" type="text" value="" id="company">
							</div>
						</div>

						<div class="form-group row">
							<label for="companytitle" class="col-xs-offset-1 col-xs-2 col-form-label">Country</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='country'>
								   <option value="1">Select Country</option>
				                   <option value="2">Pakistan</option>
				                   <option value="3">UK</option>
				                   <option value="4">UAE</option>
				                   <option value="5">America</option>
			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">Location</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='location'>
				                   <option value="">Select Location</option>
				                   <option value="1">Peshawar</option>
				                   <option value="2">Islamabad</option>
				                   <option value="3">Karachi</option>
				                   <option value="4">Lahore</option>
			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="title" class="col-xs-offset-1 col-xs-2 col-form-label">Title</label>
							<div class="col-xs-7">
								<input required class="form-control" name="title" type="text" value="" id="title">
							</div>
						</div>

						<div class="form-group row">
							<label for="role" class="col-xs-offset-1 col-xs-2 col-form-label">Role</label>
							<div class="col-xs-7">
								<input required class="form-control" name="role" type="text" value="" id="role">
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">From Month</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='fmonth'>
								   <option value="">Select Month</option>
				                   <option value="1">January</option>
				                   <option value="2">Febuary</option>
				                   <option value="3">March</option>
				                   <option value="4">April</option>
				                   <option value="5">May</option>
				                   <option value="6">June</option>
				                   <option value="7">July</option>
				                   <option value="8">Agust</option>
				                   <option value="9">September</option>
				                   <option value="10">October</option>
				                   <option value="11">November</option>
				                   <option value="12">December</option>

			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">From Year</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='fyear'>

								   <option value="">Select year</option>


				                   @for ($i = 1980; $i <= 2016; $i++)

				                   <option value="{{ $i }}">{{ $i }}</option>

				                   @endfor
			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">To Month</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='tomonth'>
								   <option value="">Select Month</option>
				                   <option value="1">January</option>
				                   <option value="2">Febuary</option>
				                   <option value="3">March</option>
				                   <option value="4">April</option>
				                   <option value="5">May</option>
				                   <option value="6">June</option>
				                   <option value="7">July</option>
				                   <option value="8">Agust</option>
				                   <option value="9">September</option>
				                   <option value="10">October</option>
				                   <option value="11">November</option>
				                   <option value="12">December</option>
			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">To Year</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='toyear'>
								  <option value="">Select year</option>


				                   @for ($i = 1980; $i <= 2016; $i++)

				                   <option value="{{ $i }}">{{ $i }}</option>

				                   @endfor

			                    </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="locationtitle" class="col-xs-offset-1 col-xs-2 col-form-label">Current</label>
							<div class="col-xs-7">
								<select data-placeholder="Choose Category" class="form-control" name='current'>
								   <option value="">Select Status</option>
				                   <option value="1">Yes</option>
				                   <option value="2">No</option>
			                    </select>
							</div>
						</div>



						<div class="form-group row">
							<label for="description" class="col-xs-offset-1 col-xs-2 col-form-label">Description</label>
							<div class="col-xs-7">
								<textarea required class="form-control" name="description" rows="10" type="text" id="description"></textarea>
							</div>
						</div>

						<div class="form-group row">
								<button type="submit" class="col-xs-offset-5 btn btn-primary">Save Changes</button>
								<button type="button" class="btn btn-primary" onclick="window.location.href=">Cancel</button>
						</div>


					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
