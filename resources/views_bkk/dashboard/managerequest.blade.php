@extends('layouts.app')

@section('style')
    @parent
    <link rel="stylesheet" href="<?php echo asset('css/faq.css')?>" type="text/css">
@endsection

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <center><h1>Freelancer Requests</h1></center>
                <?php
                    $i= 0 ;
                    if(isset($buyerrequests) && !empty($buyerrequests)){
                 foreach ($buyerrequests  as $post=>$object) {
                //echo "<pre>";
                //var_dump($object);
                ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">Title: <a href="/dashboard/<?php echo $object[$i]->id; ?>"><?php echo $object[$i]->title; ?></a>; by <a href="/<?php $object[$i]->author; ?>"><?php $object[$i]->author; ?></a>
                            ; at amount $<?php $object[$i]->amount;?>
                            @if($object[$i]->payment_type == "full time")
                                (full time basis)
                            @elseif($object[$i]->payment_type == "hourly")
                                / hour basis
                            @endif

                        </div>
                        <div class="panel-body">
                            Keywords: 	&nbsp 	{{$object[$i]->tags}}<br>
                            Start Date: &nbsp 	{{$object[$i]->startdate}}<br>
                            Deadline: 	&nbsp 	{{$object[$i]->deadline}}<br>
                            Description:&nbsp	{{$object[$i]->projectdescription}}
                            
                            <input type="hidden" name="offersId" id="offersId" value="<?php echo $object[$i]->projectid;?>">
                           <a href="recievedoffers/all/{{$object[$i]->projectid}}"><button class="pull-right badge"  id="offers"> <button class="pull-right badge"  id="offers">Offers <?php echo $object[$i]->requestsCount;?></button></a>
                        </div>

                    </div>
                
               <?php }
                }  else {
                    echo "No Requests";
                }?>
                <div id="content"></div>

            </div>
        </div>
    </div>

@stop


@section('scripts')
<script type="text/javascript">
jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $('#offers').on('click',function(){
       //console.log('ok');
       var offers = $('#offersId').val();
      // alert(offers);
      // alert(_token);
          $.ajax({
            url:"offers",
            type:'POST',
            data:{'offers':offers,'_token':"{{ csrf_token() }}"},
            success:function(data){
              // console.log(data);
               // console.log(data).html();
               $("#content").html(data).fadeIn('slow');

            },
            error:function(data){
              //  console.log(data);
            }
          })

    });
     var _token = "{{ csrf_token() }}";
</script>

@endsection