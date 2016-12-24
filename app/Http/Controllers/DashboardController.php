<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Projbid;
use App\Jobs;
use App\Message;
use App\Projpost;
use App\Category;
use App\Subcategory;
use App\User;
use Illuminate\Database\MySqlConnection;
use Session;
use App\Skills;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Redirect;

use GeoIP as GeoIP;


class DashboardController extends Controller
{
  public function searchOffers(Request $request){
        

        $id = $request->offers;
        $num = Projbid::where('projpost_id',$id)->get();
        $data="";
        foreach ($num as $num) {
 $data .= "<div class='panel panel-default'>
                <div class='panel-body'>
                      <div class='row'>
                           <div class='col-sm-2'>$num->username</div>
                           <div class='col-sm-6'>$num->description</div>
                           <div class='col-sm-2'>$num->amount</div>
	                           <div class='col-sm-2' id='bidder'>
	                           
	                           <button class='btn btn-sm-default'>
	                           	<i class='glyphicon glyphicon-earphone'>Conact
	                           	</i>
	                           </button>
	                            <a href='$num->username'><button class='btn btn-sm-default'>
	                           	<i class='glyphicon glyphicon-earphone'>View Profile
	                           	</i>
	                           </button></a>
	                           
	                           </div>
                      </div>  
               </div>
             </div>";
          //  $data .= $num->username." ".$num->description." ".$num->amount."------";

        }
        return $data;
       // return $request->offers;
    }

    public function index()
    {

        $posts = Projpost::latest()->paginate(10);
        return view('dashboard.index', compact('posts'));
    }
    public function faq()
    {
        //$posts = Projpost::latest()->get();
        return view('faq');
    }

    public function show($id)
    {
        $post = Projpost::findOrFail($id);
        $bids = Projbid::where('projpost_id', $id)->get();

        return view('dashboard.show', compact('post', 'bids'));
    }

    public function showpb($id)
    {
        $posts = Projpost::where('author', $id)->latest()->get();
        return view('dashboard.pindex', compact('posts', 'id'));
    }

    public function showbidpost($id)
    {
        $authuser = Auth::user()->name;
        if ($authuser == $id) {

            $posts = DB::table('projposts')->join('projbids', 'projposts.id', '=', 'projbids.projpost_id')->select('projposts.id', 'author', 'title', 'projposts.description as description', 'payment_type', 'startdate', 'deadline', 'tags', 'projposts.amount as amount')->where('projbids.username', $id)->groupBy('projposts.id');
            $posts = $posts->distinct()->get();

            return view('dashboard.bidindex', compact('posts', 'id'));
        } else {
            return "View your own bidded posts mate!";
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $authuser = Auth::user()->name;
            $ip = $_SERVER['REMOTE_ADDR'];
            $data = geoip()->getLocation($ip);
            $categories = DB::table('categories')->get();

            //dd($categories);
            return view('dashboard.create', compact('authuser','data','categories'));
        } else {
            return Redirect::to('login');
        }
    }
      public function loadsubcategory($id){
        if(count($id)){
            $subcategories = DB::table('subcategory')
                ->select('subcategory_id','name')
                ->where('category_id','=',$id)->get();
           return json_encode($subcategories);
        }
    }

 public function store()
    {
        $input = Input::all();
        $authuser = Auth::user()->name;

        $newpost = new Projpost;
        $newpost->author = $authuser;
        $newpost->title = $input['title'];
        $newpost->description = $input['description'];
        $newpost->tags = strtolower($input['tags']);
        $newpost->payment_type = $input['pt'];
         $newpost->country = $input['country'];
        $newpost->city = $input['city'];
        $newpost->postalcode = $input['postalcode'];
        $newpost->startdate = $input['startdate'];
        $newpost->deadline = $input['deadline'];
        $newpost->amount = $input['amount'];

        if(isset($input['parent_cat']) && empty($input['otherparent'])){
            $newpost->category_id = $input['parent_cat'];
        }
        elseif(isset($input['otherparent']) && !empty($input['otherparent'])) {
            $category = new Category();
            $category->name = $input['otherparent'];
            $category->save();
            $categoryid = $category->id;

            $newpost->category_id = $categoryid;
        }
        else{
            echo "please enter Parent category";
        }
        if(isset($input['sub_cat']) && empty($input['otherchild'])){
            $newpost->subcategory_id = $input['sub_cat'];
        }
        elseif (isset($input['otherchild']) && !empty($input['otherchild']) && !empty($input['otherparent'])){
            $subcategory = new Subcategory();
            $subcategory->name = $input['otherchild'];
            $subcategory->category_id = $categoryid;
            $subcategory->save();
            $subcategoryid = $subcategory->id;
            $newpost->subcategory_id = $subcategoryid;
        }
        elseif (empty($input['otherparent']) && !empty($input['otherchild']) && !empty($input['parent_cat'])){
           $otherSub = new Subcategory();
            $otherSub->name = $input['otherchild'];
            $otherSub->category_id = $input['parent_cat'];
            $otherSub->save();
            $othesubid = $otherSub->id;
            $newpost->subcategory_id = $othesubid;

        }
        else {
            echo "please select Child Category ";
        }

        $newpost->amount = $input['amount'];
        $newpost->status = 'waiting';

        $newpost->save();

        return redirect($authuser . '/dashboard');
    }

    public function showeb($id) // show edit blog for particular blog

    {
        $authuser = Auth::user()->name;
        $post = Projpost::findOrFail($id);
        if ((Auth::check() == true) && ($authuser == $post->author)) {
            if ($post->status == 'waiting') {
                return view('dashboard.edit', compact('post'));
            } else {
                return "Your posted project can not be edited, as it has already been awarded!";
            }
        } else {
            return 'Edit your own job posts';
        }
    }

    public function edit($id)
    {
        $authuser = Auth::user()->name;
        $input = Input::all();

        $post = Projpost::findOrFail($id);
        $post->title = $input['title'];
        $post->description = $input['description'];
        $post->tags = strtoupper($input['tags']);
        $post->payment_type = $input['pt'];
        $post->startdate = $input['startdate'];
        $post->deadline = $input['deadline'];
        $post->amount = $input['amount'];
        $post->save();

        return redirect($authuser . '/dashboard');

    }
    public function managepost()
    {
        $authuser = Auth::user()->name;
        $userJobs = DB::table('projposts')
            ->select()
            ->where('author',$authuser)
            ->get();
        if(count($userJobs)){
            return view('dashboard.managepost')->with('posts',$userJobs);
        } else {
            return redirect($authuser . '/dashboard');
        }
    }
    public function showbiddedpost(){
        $authuser = Auth::user()->name;
        $biddedpost = DB::table('projbids')
            ->join('projposts', 'projbids.projpost_id', '=', 'projposts.id')
            ->select('projbids.*', 'projposts.description', 'projposts.title','projposts.author',
                'projposts.payment_type','projposts.tags','projposts.startdate','projposts.deadline','projposts.status')
            ->where('projbids.username',$authuser)
            ->get();
        //dd($biddedpost);
       return view('dashboard.biddedpost')->with('biddedposts',$biddedpost);
    }
    public function managerequest(){
        $authuser = Auth::user()->name;
        $model = Projpost::select('id')->where('author', '=', $authuser)->get()->toArray();
      /* $managerequests = DB::table('projposts')
                        ->select('id','author')
                        ->where('author',$authuser)
                        ->values()
                        ->get();
      */
       // dd($model);
        $i = 0;
        $requests = array();
        foreach ($model as $requets){
            $requests[$i] = DB::table('projbids')
                ->join('projposts', 'projbids.projpost_id', '=', 'projposts.id')
                ->select(DB::raw('count(*) as requestsCount'),'projbids.*', 'projposts.description as projectdescription', 'projposts.title','projposts.author',
                    'projposts.payment_type','projposts.tags','projposts.startdate','projposts.deadline','projposts.status','projposts.id as projectid')
                ->whereIn('projbids.projpost_id',$requets)
                ->get();
            $i++;
        }
       return view('dashboard.managerequest')->with('buyerrequests',$requests);

    }

    public function destroy($id)
    {
        $post = Projpost::findOrFail($id);
        if ($post->status == 'waiting') {
            $post = Projpost::findOrFail($id);
            $post->delete();
            $authuser = Auth::user()->name;
            return redirect($authuser . '/dashboard');
        } else {
            return "Your posted project can not be deleted, as it has already been awarded!";
        }
    }

    public function bidpost(Request $request)
    {
        $this->validate($request, [
            'postid' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);
        $authuser = Auth::user()->name;
        $checkUser = DB::table('projbids')
                    ->select()
                    ->where('username',$authuser)
                    ->where('projpost_id',$request['postid'])
                    ->get();
        if(!empty($checkUser)){
            return response()->json('Sorry You have already applied for this job');
        } else {
            $placebid = new Projbid;
            $placebid->projpost_id = $request['postid'];
            $placebid->username = $authuser;
            $placebid->description = $request['description'];
            $placebid->amount = $request['amount'];
            $placebid->acceptstatus = 0;
            $placebid->save();

            // Instart notifications start from here.
            $notification_id = DB::table('bid_notifications')->insert([
                'projpost_id' => $request['postid'],
                'message' => $authuser.' bid on your porject '.$request['title'],
                'notification_type' => 'Project Bid',
                'author' => $request['author']
            ]);

            if ($request->ajax()) {
                return response()->json();
            }
        }



    }

    public function bidaccepts(Request $request)
    {
        $this->validate($request, [
            'postid' => 'required',
            'bidid' => 'required',
        ]);

        $pid = $request['postid'];
        $bid = $request['bidid'];

        $post = Projpost::findOrFail($pid);
        $post->status = 'awarded';
        $post->accepted_bid_id = $bid;
        $post->save();

        $bid = Projbid::findOrFail($bid);
        $bid->acceptstatus = 1;
        $bid->save();

        if ($request->ajax()) {
            return response()->json();
        }

    }

    public function search(Request $request)
    {
        $location = GeoIP::getLocation();           // Getting location of user via IP
        $lat1 = $location['lat'];
        $lon1 = $location['lon'];

        $searchWords = explode(",", strtoupper($request['navsearch']));

        $posts = DB::table('projposts')->join('profiles', 'projposts.author', '=', 'profiles.username');
        foreach ($searchWords as $word) {
            $posts->orWhere('tags', 'LIKE', '%' . $word . '%');
        }
        $posts = $posts->distinct()->get();

        $arrays = array();
        foreach ($posts as $post) {             // src of this distance calculation formula = http://www.geodatasource.com/developers/php       
            $lat2 = $post->lati;
            $lon2 = $post->long;
            $theta = $lon1 - $lon2;

            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $km = $dist * 60 * 1.1515 * 1.609344;
            $post->dist = $km;
            $arrays[] = $post;
        }
        usort($arrays, array($this, "cmp"));

        if (Auth::check()) {
            return view('dashboard.search', compact('posts'));
        } else {
            return view('dashboard.offlineSearch', compact('posts'));
        }
        //    return $posts;
    }

    public function searchviews()
    {
        if (Auth::check()) {

            return view('dashboard.searchp');
        } else {
            return Redirect::to('login');
        }
    }
    public function searchview(Request $request)
    {
        if (Auth::check()) {
            //$authuser = Auth::user()->name;
            $this->validate($request,[
                'tosearch' => 'required',
            ]);

            //$search = $request['tosearch'];
            //echo $search;exit;
            $searchWords = explode(",", strtoupper($request['tosearch']));


            $posts = Projpost::query();
            foreach ($searchWords as $word) {
                $posts->orWhere('tags', 'LIKE', '%' . $word . '%');
            }

            $posts = $posts->distinct()->get();
            //var_dump($posts);


            return view('dashboard.searchp', compact('posts'));
        } else {
            return Redirect::to('login');
        }
    }



    public function skillsearch(Request $request)
    {
        $this->validate($request,[
         'tosearch' => 'required',
        ]);

        //$searchWords=$request->get('tosearch');
       // $searchWords = explode(",", strtoupper($request['tosearch']));

       // $skill=Array();
      //  foreach ($searchWords as $word) {

        //   $data= Skills::Where('title', 'LIKE', '%' . $word . '%')
          //     ->distinct()
           //    ->get();
            //$data=$data->distinct()->get();
           // $skill=$data->toArray();
           // var_dump($skill);exit;


        //}
        //var_dump($datas);
        //exit;
        //$arrays = array();
       // $i = 0 ;
        //foreach ($skill as $dd) {

           // $us= $dd['username'];
        $searchWords=$request['tosearch'];
       // echo $searchWords;exit;

            $skill = DB::table('profiles')
                ->join('skills', 'profiles.username', '=', 'skills.username')
                //->join('education', 'profiles.username', '=', 'education.username')
               ->where('skills.title','LIKE', '%' . $searchWords . '%')
                ->get();





            //$result_user=$user;
           // $arrays[$i]=$result_user;
            //$i++;
        //}
        //$skill=(object)$skill;
        //var_dump($skill);exit;
        return view('freelancer.view',compact('arrays','skill'));

    }
     public function autocomplete(Request $request){
        $term = $request->term;

        $results = array();

        $queries = DB::table('skills')
            ->select('title','id')
            ->where('title', 'LIKE', '%'.$term.'%')
            //->orWhere('last_name', 'LIKE', '%'.$term.'%')
            ->take(10)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->title ];
        }
        return response()->json($results);
    }


    //public function jobsearch(Request $request)
   // {
        //echo "sssssssssssss";exit;

        //$this->validate($request,[
        //  'tosearch' => 'required',
        //]);
     //   $searchWords=$request->get('tosearch');
       // echo $searchWords;exit;
       // $data = Skills::where('title', $searchWords)->get();



//        $datas=$data->toArray();
  //      foreach ($datas as $dd) {


    //        $us= $dd['username'];
      //      $user = Profile::where('username', $us)->get();

        //    $result_user=$user->toArray();


        //}
     //   return view('dashboard.search', compact($result_user));

   // }


    public function searchview_bk(Request $request)
    {
       
        if (Auth::check()) {
            $location = GeoIP::getLocation();           // Getting location of user via IP
            $lat1  = $location['lat'];               
            $lon1  = $location['lon']; 

            $authuser = Auth::user()->name;
            $usr      = Profile::where('username', $authuser)->first();
            
//            $lat1  = $usr->lati;               // for testing on localhost purposes
//            $lon1  = $usr->long;               // for testing on localhost purposes
            
            $searchWords = explode(",", strtoupper($usr->keywords));
            
            $posts =  DB::table('projposts')->join('profiles', 'projposts.author', '=', 'profiles.username');

            $arrays = array();

            foreach ($searchWords as $word) {
                $posts->orWhere('tags', 'LIKE', '%' . $word . '%');
            }

            $posts = $posts->distinct()->get();
            $arrays = array();
            foreach ($posts as $post) {             // src of this distance calculation formula = http://www.geodatasource.com/developers/php       
                $lat2  = $post->lati;
                $lon2  = $post->long;
                $theta = $lon1 - $lon2;

                $dist       = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist       = acos($dist);
                $dist       = rad2deg($dist);
                $km         = $dist * 60 * 1.1515 * 1.609344;
                $post->dist = $km;
                $arrays[] = $post;
            }

            usort($arrays, array($this, "cmp"));

            return view('dashboard.search', compact('posts'));
        } else {
            return Redirect::to('login');
        }
    }

    public function jobsearch(Request $request)
    {
        $this->validate($request, [
            'tosearch' => 'required',
        ]);

        $location = GeoIP::getLocation();           // Getting location of user via IP
        $lat1  = $location['lat'];
        $lon1  = $location['lon'];

        $authuser = Auth::user()->name;
        $usr      = Profile::where('username', $authuser)->first();
            
//        $lat1  = $usr->lati;               // for testing on localhost purposes
//        $lon1  = $usr->long;               // for testing on localhost purposes


        $searchWords = explode(",", strtoupper($request['tosearch']));

        $posts =  DB::table('projposts')->join('profiles', 'projposts.author', '=', 'profiles.username');
        foreach ($searchWords as $word) {
            $posts->orWhere('tags', 'LIKE', '%' . $word . '%');
        }
        $posts = $posts->distinct()->get();
        $arrays = array();
        foreach ($posts as $post) {             // src of this distance calculation formula = http://www.geodatasource.com/developers/php       
            $lat2  = $post->lati;
            $lon2  = $post->long;
            $theta = $lon1 - $lon2;

            $dist       = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist       = acos($dist);
            $dist       = rad2deg($dist);
            $km         = $dist * 60 * 1.1515 * 1.609344;
            $post->dist = $km;
            $arrays[] = $post;
        }

        usort($arrays, array($this, "cmp"));
        

        if ($request->ajax()) {
            return response()->json(['success' => true, 'posts' => $posts]);
        }
        return $posts;
    }

    public function profsearch(Request $request) // profs == professionals

    {

        $this->validate($request, [
            'tosearch' => 'required',
        ]);

        $location = GeoIP::getLocation();           // Getting location of user via IP
        $lat1  = $location['lat'];               
        $lon1  = $location['lon']; 

        $authuser = Auth::user()->name;
        $usr      = Profile::where('username', $authuser)->first();
            
        $lat1  = $usr->lati;               // for testing on localhost purposes
        $lon1  = $usr->long;               // for testing on localhost purposes

        $searchWords = explode(",", strtoupper($request['tosearch']));

        $profs = Profile::query();
        foreach ($searchWords as $word) {
            $profs->orWhere('keywords', 'LIKE', '%' . $word . '%');
        }
        $profs = $profs->distinct()->get();
		$arrays = array();
        foreach ($profs as $prof) {             // src of this distance calculation formula = http://www.geodatasource.com/developers/php       
            $lat2  = $prof->lati;
            $lon2  = $prof->long;
            $theta = $lon1 - $lon2;

            $dist  		= sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist       = acos($dist);
            $dist       = rad2deg($dist);
            $km         = $dist * 60 * 1.1515 * 1.609344;
            $prof->dist = $km;
            $arrays[] = $prof;
        }
        usort($arrays, array($this, "cmp"));

        if ($request->ajax()) {
            return response()->json(['success' => true, 'profs' => $arrays]);
        }
        return $profs;
    }


	public function cmp($a, $b)
	{
	    if ($a->dist == $b->dist) {
	        return 0;
	    }
	    return ($a->dist < $b->dist) ? -1 : 1;
	}

    public function searchAcInt(Request $request) // search according to interests saved by the user in his/her profile

    {
        $this->validate($request,[
            'searchjob' => 'required',
        ]);

        //$searchWords=$request->get('tosearch');
        $searchWords = explode(",", strtoupper($request['searchjob']));


        $arrays = array();

        foreach ($searchWords as $dd) {

            //$us= $dd['username'];

            $jobs= Jobs::Where('title', 'LIKE', '%' . $dd . '%')->get();




            $arrays=$jobs;
        }
       // var_dump($arrays);exit;
        //$arrays=(object)$arrays;
        return view('dashboard.jobs',compact('arrays'));
    }
 public function showall($id)
    {
        $allbidded = DB::table('projbids as bids')
            ->join('projposts as projects', 'bids.projpost_id', '=', 'projects.id')
            ->join('profiles', 'bids.username', '=', 'profiles.username')
            ->select('projects.author as buyer', 'bids.username as bidedname','bids.id as bidid',
                'bids.description as proposals', 'projects.id as id', 'bids.amount as budget', 'profiles.profilepic')
            ->where('projects.id', '=', $id)->get();
        //dd($allbidded);

        return view('dashboard.showbidedrequests')->with('data', $allbidded);
    }

 public function createoffer(Request $request){
        $authuser = $request->id;
        $biddedpost = DB::table('projbids')
            ->join('projposts', 'projbids.projpost_id', '=', 'projposts.id')
            ->select('projbids.*', 'projposts.description', 'projposts.title','projposts.author',
                'projposts.payment_type','projposts.tags','projposts.startdate','projposts.deadline','projposts.status')
            ->where('projbids.username',$authuser)
            ->get();
        //dd($biddedpost);
        return response()->json($biddedpost);
    }
    public function requestoffer($id){
       $requestUserid = $id;
        $sendOffer = DB::table('projposts')
                    ->select('author','description','payment_type','deadline')
                    ->where('id','=',$id)->first();
        return response()->json($sendOffer);
    }
    public function sendbuyeroffer($id){
        $model = Projpost::select('id','author','title','description','payment_type','tags')->where('author', '=', $id)->get();
        return response()->json($model);
    }
    public function chat(Request $request)
    {
        $senderid = $request->senderid;
        $bidid = $request->bidid;

        //getting sender id
        $sendernameid = Auth::user()->id;
        $recieverId = $request->recieverid;
        //getting reciever name
        if ($recieverId) {
            $reciever = DB::table('users')
                ->select('id')
                ->where('name', '=', $recieverId)
                ->first();
            $recievernameid = $reciever->id;
        }
        $projectid = $request->projectid;
        $getMessage = DB::table('message')
            ->select('message.message', 'users.name', 'message.projpostid','message.type');
        if (!empty($senderid)) {
            $getMessage->join('users', 'users.id', '=', 'message.userid')
                ->where('userid', '=', $sendernameid);
        }
        if (!empty($recieverId)) {

            $getMessage->where('recieverid', '=', $recievernameid);
        }
        if (!empty($projectid)) {
            $getMessage->where('projpostid', '=', $projectid);
        }
        $messageexist = $getMessage->get();
        $type = 'buyer';
       //dd($messageexist);
        return view('dashboard.chat')->with('sender', $senderid)->with('reciever', $recieverId)
            ->with('projectid', $projectid)->with('messages', $messageexist)->with('bidid',$bidid)->with('type',$type);

    }
     public function messagesent(Request $request)
    {
        //Buyers send name instead of IDs so

        $projectid = $request->projectid;
        $senderid = $request->senderid;
        $recieverid = $request->reciever;
        $userType = $request->usertype;
        $bidid = $request->bidid;

        if ($userType == 'buyer') {
            if (!empty($senderid)) {
                $sender = DB::table('users')
                    ->select('id')
                    ->where('name', '=', $senderid)
                    ->first();

                $senderid = $sender->id;
                if (!empty($recieverid)) {
                    $reciever = DB::table('users')
                        ->select('id')
                        ->where('name', '=', $recieverid)
                        ->first();
                    $recieverid = $reciever->id;
                }
            }
        } elseif ($userType == 'Freelancer') {

        } else {

        }

        $message = new Message();
        $message->userid = $senderid;
        $message->recieverid = $recieverid;
        $message->projpostid = $projectid;
        $message->bidid = $bidid;
        $message->type = $userType;
        $message->message = $request->message;
        $message->save();
        $lastId = $message->id;
        /*if (!empty($request->chatid)) {
            $messages = DB::table('message')
                ->join('users', 'users.id', '=', 'message.userid')
                //->join('profile') here will be the profile forgn key of user
                ->select('message.*', 'users.*')
                ->where('message.userid', '=', $senderid)
                ->where('message.message_id', '=', $request->chatid)
                ->first();
            return json_encode($messages);
        } else*/if ($lastId > 0) {
        //DB::enableQueryLog();
	   $messages = DB::table('message')
                //->join('profile') here will be the profile forgn key of user
                ->select('message.*', 'users.*')
                ->where('message.message_id', '=', $lastId);

        if(isset($userType) && $userType == 'buyer'){
                $messages->join('users', 'users.id', '=', 'message.userid')
                         ->where('message.userid','=',$senderid);
        }
        if(isset($userType) && $userType == 'Freelancer'){
            $messages->join('users', 'users.id', '=', 'message.recieverid')
                    ->where('message.recieverid','=',$recieverid);
        }
        $messagess = $messages->first();
           
        //dd(DB::getQueryLog());
            return json_encode($messagess);

        } else {

            $messages = DB::table('message')
                ->join('users', 'users.id', '=', 'message.userid')
                ->join('projposts', 'projposts.id', '=', $projectid)
                //->join('profile') here will be the profile forgn key of user
                ->select('message.*', 'users.name')
                ->where('message.userid', '=', $senderid)
                ->get();
            return json_encode($messages);

        }
    }
    public function viewmessages($id)
    {
        $recieverid = $id;
        $username = Auth::user()->name;
        $biddedpost = DB::table('projbids')
            ->join('projposts', 'projbids.projpost_id', '=', 'projposts.id')
            ->join('message','message.bidid','=','projbids.id')
            ->select('projbids.*','message.userid as sender','message.recieverid as recieverid', 'projposts.description', 'projposts.title', 'projposts.author',
                'projposts.payment_type', 'projposts.tags', 'projposts.startdate', 'projposts.deadline', 'projposts.status')
            ->where('projbids.username', $username)
            ->groupBy('message.bidid')
            ->get();
        //dd($biddedpost);
        return view('dashboard.inbox')->with('inboxmessages',$biddedpost);
       /* dd($biddedpost);
        $result = array();
        $i = 0;
        foreach ($data as $d) {
            $result[$i] = $d->projpost_id;
            $i++;
        }
        $fetchmessage = DB::table('message')
            ->join('users', 'users.id', '=', 'message.userid')
            ->whereIn('projpostid', $result)
            ->where('recieverid','=',$recieverid)
            ->get();
        if (count($fetchmessage)) {
            $sender = $fetchmessage[0]->userid;
            $project = $fetchmessage[0]->projpostid;

            //dd($fetchmessage);


            /*return view('dashboard.chat')->with('messages', $fetchmessage)
                ->with('sender', $sender)->with('reciever', $recieverid)
                ->with('projectid', $project)->with('type', $userType);*/

        /*}
        Session::flash('message', 'message\',"Sorry you don\'t have any message');
        return back();*/
    }
    public function reply(Request $request){
      $senderid = $request->sender;
      $recieverid = $request->reciever;
      $projectid = $request->projectid;
      $bidid = $request->bidid;
        $query = DB::table('message')
                ->select('message','users.name','type','message_id','userid','bidid','recieverid')
                ->join('users','users.id','=','message.userid')
                ->where('bidid',$bidid)
                ->where('recieverid',$recieverid)
                ->where('userid',$senderid)
                ->get();
        $userType = "Freelancer";
        return view('dashboard.chat')->with('sender', $senderid)->with('reciever', $recieverid)
            ->with('projectid', $projectid)->with('messages', $query)->with('bidid',$bidid)->with('type',$userType);
    }
    public function submitoffer(Request $request){
        dd($request);
    }
    //Check inbox messages 
    public function conversation(){
        $username = Auth::user()->id;
        $messages = DB::table('message as inbox')
                    ->select('inbox.message','inbox.userid as sender','inbox.recieverid','inbox.projpostid as projpost_id ','inbox.bidid as id','inbox.created_at',
                            'postjob.payment_type','postjob.author','postjob.deadline','postjob.description')
                    ->join('projbids','projbids.id','=','inbox.bidid')
                    ->join('projposts as postjob','postjob.id','=','projbids.projpost_id')
                    ->where('userid','=',$username)
                    ->orWhere('recieverid','=',$username)
                    ->get();
       return view('communication.conversation')->with('inboxmessages',$messages);
    }

}