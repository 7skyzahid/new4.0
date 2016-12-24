<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function sendemail(Request $request){
        $this->validate($request, [
            'emailaddress' => 'required|max:255',
            'username' => 'required',
            'fullname' => 'required',
            'subject' => 'required',
        ]);
         $user = $request->username;
        $username = DB::table('users')->where('name','=',$user)->first();

        //$sendto = $username->email;
        //$fullName = $username->firstname.''.$username->lastname;

        Mail::send('email', array('values' => $request ,'userinfo'=>$username), function($message) use ($username , $request)
        {

            $message->to( $username->email ,$username->firstname.''.$username->lastname)->subject($request->subject)->from($request->emailaddress);
        });
        Session::flash('message','Your Email has been Successfully  Sent.!');
        return Redirect($user);
    }
}
