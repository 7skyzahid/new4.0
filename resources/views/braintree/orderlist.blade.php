@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
     @if(isset($getlist) && !empty($getlist))
        <table class="table table-responsive table-hover">
            <thead>
                <th>Date</th>
                <th>desccription</th>
                <th>Amount</th>
            </thead>
                @foreach($getlist as $data)
            <tr>
                <td>{{ $data->created_at }}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->amount}}</td>
            </tr>
                @endforeach
           
        </table>
         @else
            <div class="container" style="height:350px">
                <h4 align="center">Sorry no records found</h4>
            </div>
         @endif

    </div>
</div>
@endsection