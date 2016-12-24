@extends('layouts.app')

@section('content')
<div class="container login-form">
    <h2 class="login-title"> Register </h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                            <div class="login-userinput input-group">

                                <input id="firstname" type="text" class="form-control" style="width: 49%; margin-right: 3px;" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">


                                <input id="lastname" type="text" class="form-control" style="width: 49%; margin-left: 3px;" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">

                        </div>
                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

                                
                                <input id="name" type="text" class="form-control" name="name" autocomplete="false" placeholder="Username" value="{{ old('name') }}">
                            </div>
                            <div id="userRegister" role="alert"></div>
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>

                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            </div>
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       </div>
                        <div class="{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>

                                <input id="phone" type="tel" class="form-control" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}">

                            </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                <span id="showPassword" class="input-group-btn">
                                    <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button> 
                                </span>  
                            </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="login-userinput input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                                <span id="showPassword" class="input-group-btn">
                                    <button class="btn btn-default reveal2" type="button"><i class="glyphicon glyphicon-eye-open"></i></button> 
                                </span>  
                            </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <button class="btn btn-primary btn-block login-button" type="submit" id="register" disabled=""><i class="fa fa-user"></i> Register </button>
                            
                            <div class="checkbox login-options">
                                <a href="{{ url('/login') }}" class="login-forgot"> Already a member? Login here.</a>
                            </div>      
                    </form>
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
$(".reveal2").on('click',function() {
    var $pwd = $("#password-confirm");
    if ($pwd.attr('type') === 'password') 
        {
        $pwd.attr('type', 'text');
    } 
        else 
        {
        $pwd.attr('type', 'password');
    }
});

      jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#name").on('keyup',function(){
   //alert("ok");
    var name = $('#name').val();
    var token = "{{ csrf_token() }}";
    //alert(url);

    jQuery.ajax({
        method:'POST',
        url:url,
        data:{'name':name,'_token':"{{csrf_token()}}"},
        success:function(data){
        /// console.log(data);
           if(data=='User Name Available'){
                $("#register").removeAttr('disabled');
                 $('#userRegister').removeClass('alert alert-danger');
                $('#userRegister').addClass('alert alert-success');
               $('#userRegister').text(data);
               
                  console.log(data);
              }
             else if(data=='User Name Already Exist'){
                  $("#register").attr('disabled',true);  
                   $('#userRegister').removeClass('alert alert-success');
                   $('#userRegister').addClass('alert alert-danger');
                   $('#userRegister').text(data);
                
                 console.log(data);
        }

        },
        error:function(data){
           console.log(data);
        }
    })
    
   
});
    
var url="{{url('edit')}}";





</script>
@endsection
