<?php

namespace App\Http\Controllers;

use App\Projpost;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function applyforjob($id){
   
        $posts = DB::table('projposts')
                ->select('author','projposts.created_at','deadline','title','description','payment_type','country','city',
                    'categories.name as parentcategory','subcategory.name as childcategory')
                ->join('categories','categories.category_id','=','projposts.category_id')
                ->join('subcategory','subcategory.subcategory_id','=','projposts.subcategory_id')
                ->where('projposts.id','=',$id)
                ->first();
       $time = Carbon::now();
        $now = $time->format('y-m-d H:i:s');
       
        $created = $posts->created_at;
        $mins =  round(abs(strtotime($now) - strtotime($created)) / 60,2);
        $days = $this->con_min_days($mins);
        $applicants = DB::table('projbids')
                    ->select('username')
                    ->where('projpost_id','=',$id)
                    ->get();
        return view('job.jobview')->with('jobs',$posts)->with('postedtime',$this->con_min_days($mins))->with('apllicants',$applicants);
    }
    protected function con_min_days($mins)
    {
        $days = '00';
        $hours = str_pad(floor($mins /60),2,"0",STR_PAD_LEFT);
        $mins  = str_pad($mins %60,2,"0",STR_PAD_LEFT);

        if((int)$hours > 24){
            $days = str_pad(floor($hours /24),2,"0",STR_PAD_LEFT);
            $hours = str_pad($hours %24,2,"0",STR_PAD_LEFT);
        }
        if(isset($days)) { $days = $days." Day's :";}
        return $days.$hours." Hour's :".$mins." Min's";
    }

}
