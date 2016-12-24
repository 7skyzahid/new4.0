@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    
                	<form method="POST" action="/editprofile" id="f2">

                	<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>

						{!! csrf_field() !!}
						Profile Title &nbsp&nbsp&nbsp&nbsp&nbsp*<br>
						<textarea name="proftitle" required rows="1" form="f2" cols="100" placeholder="Enter profile title here"></textarea><br><br>
						Address &nbsp&nbsp&nbsp&nbsp&nbsp*<br>
						<textarea name="address" required rows="1" form="f2" cols="100" placeholder="Enter address here"></textarea><br><br>
						Git-link<br>
						<textarea name="gitlink" rows="1" form="f2" cols="100" placeholder="Enter git-link here"></textarea><br><br>
						FB-link<br>
						<textarea name="fblink" rows="1" form="f2" cols="100" placeholder="Enter fb-link here"></textarea><br><br>
						Twitter-link<br>
						<textarea name="twlink" rows="1" form="f2" cols="100" placeholder="Enter twitter-link here"></textarea><br><br>
						LinkedIn-link<br>
						<textarea name="lilink" rows="1" form="f2" cols="100" placeholder="Enter linkedin-link here"></textarea><br><br>
						Languages &nbsp&nbsp&nbsp&nbsp&nbsp*<br>
						<textarea name="langs" required rows="1" form="f2" cols="100" placeholder="Enter languages here"></textarea><br><br>
						About &nbsp&nbsp&nbsp&nbsp&nbsp*<br>
						<textarea name="about" required rows="10" form="f2" cols="100" placeholder="Enter your about information here"></textarea><br><br>
						Interests &nbsp&nbsp&nbsp&nbsp&nbsp*<br>
						<textarea name="interests" required rows="5" form="f2" cols="100" placeholder="Enter interests here"></textarea><br><br>
						
						<button type="submit">Save</button> <button onclick="window.location.href='/profile'">Cancel</button>
					</form>


                </div>
            </div>
        </div>
    </div>
</div>

@stop