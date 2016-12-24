@extends('layouts.app')
@section('content')
<style>
  .img-profile
   {
       position: relative;
       float: left;
       width:  100px;
       height: 100px;
       background-position: 50% 50%;
       background-repeat:   no-repeat;
       background-size:     cover;
   }
</style>
<ul>
    @foreach($data as $cells)
    <li class="row" style="background-color: floralwhite">

        <!-- Date -->
        <div class="col-md-3">
            <div class="photo">
                <h4>Photo</h4>
                 @if(isset($cells->profilepic))

                    <img src="{{asset('images').'/'.$cells->profilepic}}" alt="" class="img-circle img-responsive img-profile" >

                @else
                    <img src="images/download.png" alt="" class="img-circle img-responsive img-profile" >
                    @endif
            </div>
        </div>
        <!-- End Date -->
        <div class="col-md-9">
            <div class="name">
                <h4>{{$cells->bidedname}}
                </h4>
            </div>
            <p>{{$cells->proposals}}<span class="pull-right badge" style="font-size: large">${{$cells->budget}}</span> </p>
           <div>
               <a href="{{URL::to($cells->bidedname)}}"> <button>Visit profile</button></a>
               <button>Contact {{$cells->bidedname}}</button>
           </div>

        </div>
    </li>

    @endforeach
</ul>
@endsection