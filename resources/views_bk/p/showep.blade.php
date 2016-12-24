@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<br><br>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Profile</div>

					<div class="panel-body">

						<form method="POST" action="../{{$uprof->username}}"  id="f2" enctype="multipart/form-data">
							{!! csrf_field() !!}

							<div class="form-group row">
								<label for="proftitle" class="col-xs-offset-1 col-xs-2 col-form-label">Professional Headline</label>
								<div class="col-xs-7">
									<input required class="form-control" name="proftitle" type="text" value="{{$uprof->briefdescription}}" id="proftitle">
								</div>
							</div>

							<div class="form-group row">
								<label for="address" class="col-xs-offset-1 col-xs-2 col-form-label">Address</label>
								<div class="col-xs-7">
									<input required class="form-control" name="address" type="text" value="{{$uprof->address}}" id="address">
								</div>
							</div>
							<div class="form-group row">
								<label for="country" class="col-xs-offset-1 col-xs-2 col-form-label">Country</label>

								<div class="col-xs-7">
									@if(isset($uprof->country) && !empty($uprof->country))
										<input required class="form-control" name="country" type="text" value="{{$uprof->country}}" id="country">
									@else
										<input required class="form-control" name="country" type="text" value="{{$userLocation->country}}" id="country">
									@endif
								</div>
							</div>
							<div class="form-group row">
								<label for="city" class="col-xs-offset-1 col-xs-2 col-form-label">City</label>
								<div class="col-xs-7">

									@if(isset($uprof->city) && !empty($uprof->city))
										<input required class="form-control" name="city" type="text" value="{{$uprof->city}}" id="city">
									@else
										<input required class="form-control" name="city" type="text" value="{{$userLocation->city}}" id="city">
									@endif
								</div>
							</div>
							<div class="form-group row">
								<label for="postalcode" class="col-xs-offset-1 col-xs-2 col-form-label">PostCode</label>
								<div class="col-xs-7">
									@if(isset($uprof->postalcode) && !empty($uprof->postalcode))
										<input required class="form-control" name="postalcode" type="text" value="{{$uprof->postalcode}}" id="postalcode">
									@else
										<input required class="form-control" name="postalcode" type="text" value="{{$userLocation->postal_code}}" id="postalcode">
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-xs-offset-1 col-xs-2 col-form-label">Email</label>
								<div class="col-xs-7">
									<input class="form-control" name="email" type="text" value="{{$user->email}}" id="email">
								</div>
							</div>

							<div class="form-group row">
								<label for="website" class="col-xs-offset-1 col-xs-2 col-form-label">Website</label>
								<div class="col-xs-7">
									<input class="form-control" name="website" type="url" value="{{$uprof->website}}" id="website">
								</div>
							</div>

							<div class="form-group row">
								<label for="gitlink" class="col-xs-offset-1 col-xs-2 col-form-label">Git-link</label>
								<div class="col-xs-7">
									<input class="form-control" name="gitlink" type="url" value="{{$uprof->gitlink}}" id="gitlink">
								</div>
							</div>

							<div class="form-group row">
								<label for="fblink" class="col-xs-offset-1 col-xs-2 col-form-label">Facebook-link</label>
								<div class="col-xs-7">
									<input class="form-control" name="fblink" type="url" value="{{$uprof->fblink}}" id="fblink">
								</div>
							</div>

							<div class="form-group row">
								<label for="twitlink" class="col-xs-offset-1 col-xs-2 col-form-label">Twitter-link</label>
								<div class="col-xs-7">
									<input class="form-control" name="twitlink" type="url" value="{{$uprof->twitlink}}" id="twitlink">
								</div>
							</div>

							<div class="form-group row">
								<label for="lilink" class="col-xs-offset-1 col-xs-2 col-form-label">LinkedIn-link</label>
								<div class="col-xs-7">
									<input class="form-control" name="lilink" type="url" value="{{$uprof->lilink}}" id="lilink">
								</div>
							</div>

							<div class="form-group row">
								<label for="langs" class="col-xs-offset-1 col-xs-2 col-form-label">Language</label>
								<div class="col-xs-7">
									<input class="form-control" name="langs" type="text" value="{{$uprof->languages}}" id="langs">
								</div>
							</div>

							<div class="form-group row">
								<label for="hourlyrate" class="col-xs-offset-1 col-xs-2 col-form-label">HourlyRate: $</label>
								<div class="col-xs-7">
									<input class="form-control" name="hourlyrate" type="int" value="{{$uprof->hourlyrate}}" id="langs">
								</div>
							</div>
							<div class="form-group row">
								<label for="about" class="col-xs-offset-1 col-xs-2 col-form-label">About</label>
								<div class="col-xs-7">
									<textarea required class="form-control" name="about" rows="5" type="text" id="about">{{$uprof->about}}</textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="interests" class="col-xs-offset-1 col-xs-2 col-form-label">Interests</label>
								<div class="col-xs-7">
									<textarea required class="form-control" name="interests" rows="5" type="text" id="interests">{{$uprof->interests}}</textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="keywords" class="col-xs-offset-1 col-xs-2 col-form-label">Keywords</label>
								<div class="col-xs-7">
									<textarea required class="form-control" name="keywords" rows="5" type="text" id="keywords">{{$uprof->keywords}}</textarea>
								</div>
							</div>
							<div class="form-group row">
								@if(isset($uprof->profilepic))

									<label for="prfileimage" class="col-xs-offset-1 col-xs-2 col-form-label">Profile Image</label>
									<div class="col-xs-7">
										<img src="{{base_path('images/')}}{{$uprof->profilepic}}" name="prfileimage">
										@else
											<input type="file" class="form-control" name="prfileimage" rows="5" type="text" id="prfileimage">
										@endif
									</div>
							</div>
							<div class="form-group row">

								<img src="{{public_path('images/').$uprof->profilepic}}" height="50" width="50"><br>
								<label for="prfileimage" class="col-xs-offset-1 col-xs-2 col-form-label">Profile Image</label>
								<div class="col-xs-7">
									<input type="file" class="form-control" name="prfileimage" rows="5" type="text" id="prfileimage">
								</div>
							</div>

							<div class="form-group row">
								<button type="submit" class="col-xs-offset-8 btn btn-primary">Save</button>
								<button type="button" class="btn btn-primary" onclick="window.location.href='../{{$uprof->username}}'">Cancel</button>
							</div>


						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

@stop