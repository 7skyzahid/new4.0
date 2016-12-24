@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container login-form">
    <h2 class="login-title"> Reset Password </h2>
    <div class="panel panel-default">
        <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">

                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="checkbox login-options">

                        <a class="login-forgot" href="#" onclick="$(this).closest('form').submit();"><i class="fa fa-envelope"></i> Send Password Reset Link </a>

                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
