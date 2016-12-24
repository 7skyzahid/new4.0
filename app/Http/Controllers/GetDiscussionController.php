<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Mail;
//use App\POI;
use Auth;


class GetDiscussionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Retrieve discussion.
     */
    public function getDiscussions(Request $request)
    {

        $discussions = DB::table('discussion')
            ->select('users.*', 'discussion.*')
            ->join('users', 'users.id', '=', 'discussion.userID')
            ->where('userID', '=', $request->userID)
            ->where('chatID', '>', $request->chatID)
             ->limit(1)
             ->get();
        if(count($discussions) > 0) {
            echo json_encode($discussions);
        }

    }


}
