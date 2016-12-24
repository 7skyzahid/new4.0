<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class FreelancerController extends Controller
{

    public function index()
    {
       // echo "dddd";
    }


    public function view()
    {
        //
        //   echo "dddddddd";exit;
        $profile = DB::table('profiles')
            ->join('users', 'profiles.username', '=', 'users.name')->paginate(10);

           // ->get();
           // ->paginate(10);
      //  $msg = DB::table('profiles')
        //    ->join('freelancerchat', 'profiles.username', '=', 'freelancerchat.freelancer_id')
          //  ->get();

       // $user = User::all();
       // var_dump($profile);exit;
      //  $profile = $profile

        return view('freelancer.view',compact('profile'));

    }
}
