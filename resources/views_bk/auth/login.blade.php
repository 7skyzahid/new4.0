@extends('layouts.app')

@section('content')
<div class="container login-form">
    <h2 class="login-title"> Login </h2>
    <div class="panel panel-default">
        <div class="panel-body">
                       <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }} {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group ">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="login-userinput input-group">                                
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password">
                                <span id="showPassword" class="input-group-btn">
                                    <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button> 
                                </span>  

                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>


                        <div class="checkbox login-options">
                                    <label >
                                        <input  type="checkbox" name="remember"> Remember Me
                                    </label>
                        </div>

                        <button class="btn btn-primary btn-block login-button" type="submit"><i class="fa fa-sign-in"></i> Login </button>

                        <div class="checkbox login-options">
                            <a class="login-forgot" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>      

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>


<script type="text/javascript">

$(".reveal").on('click',function() {
    var $pwd = $("#password");
    if ($pwd.attr('type') === 'password') 
        {
        $pwd.attr('type', 'text');
    } 
        else 
        {
        $pwd.attr('type', 'password');
    }
});
</script>
@endsection
