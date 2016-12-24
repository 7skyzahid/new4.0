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
                        <div class="form-group row" style="display: none;" id="showparentcategory">
                            <label for="tags" class="col-xs-offset-1 col-xs-2 col-form-label">Parent Category</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="otherparent" placeholder="Parent Category">
                            </div>
                        </div>
                        <div class="form-group row" style="display: none" id="showchildcategory">
                            <label for="tags" class="col-xs-offset-1 col-xs-2 col-form-label">Child Category</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="otherchild" placeholder="Child Category">
                            </div>
                        </div>
                        <div id="parent_hide">
                            <div class="form-group row">
                                <label for="parent_cat" class="col-xs-offset-1 col-xs-2 col-form-label">Parent Category</label> <span id="other" class="fa fa-plus">Other Parent</span>
                                <div class="col-xs-7">
                                    <select name="parent_cat" id="parent_cat" class="form-control" >
                                        <option>Select Parent Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="child_hide">
                            <div class="form-group row" id="subcate">
                                <label for="sub_cat" class="col-xs-offset-1 col-xs-2 col-form-label">Sub Category</label><span id="childother" class="fa fa-plus">Other Child</span>
                                <div class="col-xs-7">
                                    <select name="sub_cat" id="sub_cat" class="form-control "></select>
                                </div>
                            </div>
                        </div>

						@if(isset($data->country))
						<div class="form-group row">
							<label for="country" class="col-xs-offset-1 col-xs-2 col-form-label">Country</label>
							<div class="col-xs-4">
								<input type="text" class="form-control" name="country" value="{{$data->country}}">

							</div>

						</div>
                        @else
                        <div class="form-group row">
                            <label for="country" class="col-xs-offset-1 col-xs-2 col-form-label">Country</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="country" value="">

                            </div>

                        </div>
                        @endif
                        @if(isset($data->city))
                        <div class="form-group row">
                            <label for="city" class="col-xs-offset-1 col-xs-2 col-form-label">City</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="city" value="{{$data->city}}">

                            </div>

                        </div>
                        @else
                            <div class="form-group row">
                                <label for="city" class="col-xs-offset-1 col-xs-2 col-form-label">City</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="city" value="">

                                </div>

                            </div>
                        @endif
                        @if(isset($data->postal_code))
                        <div class="form-group row">
                            <label for="postalcode" class="col-xs-offset-1 col-xs-2 col-form-label">Postal Code</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="postalcode" value="{{$data->postal_code}}">

                            </div>

                        </div>
                        @else
                            <div class="form-group row">
                                <label for="postalcode" class="col-xs-offset-1 col-xs-2 col-form-label">Postal Code</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="postalcode" value="">

                                </div>

                            </div>
                        @endif


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$("#parent_cat").change(function() {
			$.get('loadsubcat/' + $(this).val(), function(data) {
                var parseData = JSON.parse(data);
                var toAppend = '';
                $.each(parseData,function(i,o){
                    toAppend += '<option value='+o.subcategory_id+'>'+o.name+'</option>';
                });
                $('#sub_cat').html(toAppend);
			});
		});
        $('#other').click(function () {
            $('#parent_hide').hide();
            $('#child_hide').hide();
            $('#showparentcategory').show();
            $('#showchildcategory').show();
        });
        $('#childother').click(function () {
            $('#parent_hide').hide();
            $('#child_hide').hide();
            $('#showchildcategory').show();
        });

	});
</script>
</div>

@stop
