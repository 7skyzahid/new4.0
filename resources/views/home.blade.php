@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in... <a href="<?php echo '/'.Auth::user()->name;?>">Visit your profile!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
