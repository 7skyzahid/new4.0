<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::bind('profile',function($uname){
	return App/Profile::where('username',$uname)->first();
})
*/

Route::get('/home', function () {
		if (Auth::check()) {
			return view('home');
		} else {
			return Redirect::to('login');
		}
	});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/faq',function(){
    return view('faq');
});

Route::get('/portpolio',function(){
    return view('portpolio');

});
Route::post('edit','ProfilesController@searchName');
/*Zahid routes*/
Route::get('freelancers','FreelancerController@view');
Route::post('addorder','PaymentController@addOrder');
Route::post('freelancerstatus','FreelancerController@changestatus');
Route::post('createprivatemsg','FreelancerController@createmsg');
Route::post('fcreatemsg','FreelancerController@fcreatemsg');

/*haq*/


Route::post('/insertDiscussion', 'EventDiscussionController@insertDiscussion');

Route::post('/getDiscussions', 'GetDiscussionController@getDiscussions');
/* Haq*/

Route::get('viewmsgs','ProfilesController@viewmsgs');
/*Zahid routes*/
Route::get('freelancers','FreelancerController@view'); 
Route::get('free','FreelancerController@index');
Route::get('addpayment','PaymentController@addpayment');
Route::post('addorder','PaymentController@addOrder');

Route::get('autocomplete',array('as'=> 'autocomplete','uses'=>'ProfilesController@autocomplete'));
Route::get('skillcomplete',array('as'=> 'skillcomplete','uses'=>'DashboardController@autocomplete'));
Route::get('autocompletecountry',array('as'=> 'autocompletecountry','uses'=>'ProfilesController@autocompletecountry'));
Route::get('autocompletejobcity',array('as'=> 'autocompletejobcity','uses'=>'ProfilesController@autocompletejobcity'));
Route::post('returnjob','ProfilesController@jobreturn');
/*read notes on dashboard.search.blade.php ... then you'll understand following 3 routes*/
	// page for searching jobs ... like a search engine
Route::get('searchjobs','DashboardController@searchviews');		// page for searching jobs ... like a search engine
Route::get('searchjobss','DashboardController@searchview');		// page for searching jobs ... like a search engine
Route::get('searchjobsint','DashboardController@searchAcInt');	// working... but still have to be integrated with search.blade.php with ajax
Route::post('skillsearch','DashboardController@skillsearch');

Route::post('searchprofs','DashboardController@profsearch');

//Route::get('temproute','DashboardController@searchAcInt');		// page for searching jobs ... like a search engine

//Skill related Routed
Route::post('addskill','SkillsController@create');
Route::post('dashboard/store','SkillsController@store');
Route::get('dashboard/viewSkill','SkillsController@show');
Route::get('dashboard/editSkill/{id}','SkillsController@edit');
Route::post('dashboard/{id}/update/','SkillsController@update');
Route::get('dashboard/deleteSkill/{id}','SkillsController@destroy');


Route::post('sendmail','MailController@sendemail');

Route::get('dashboard','DashboardController@index');
Route::get('dashboard/create','DashboardController@create');
Route::get('dashboard/showbidded','DashboardController@showbiddedpost');
Route::get('dashboard/{id}','DashboardController@show');			// viewing particular job post
Route::get('dashboard/{id}/editpost','DashboardController@showeb');	// view for editing logged in user's job post
Route::get('{id}/dashboard','DashboardController@showpb');	// show particular profile's all job posts
Route::post('dashboard','DashboardController@store');		// for saving new job post
Route::post('dashboard/{id}','DashboardController@edit');	// for editing logged in user's job post
Route::delete('dashboard/{id}','DashboardController@destroy');	// for deleting logged in user's job post
Route::post('jobpost','DashboardController@bidpost');	// for
Route::post('jobbid','DashboardController@bidaccept');

//Route::get('/p','ProfilesController@index');
//Route::post('/p', 'ProfilesController@create');		// for posting data of edited profile

// made indirect links by making showep.blade.php and show.blade.php to make it more secure

Route::get('/', 'ProfilesController@defaulthome');
Route::get('aboutUs',function (){
    return View('aboutus');
});
//Route::get('/searchjobs','DashboardController@searchj');

Route::get('/scoreboard','ProfilesController@info');			// for profile page .--------- make profile page here
Route::get('getUpdate','ProfilesController@getUpdate');			// for profile edit experience modal page .---------
Route::post('updaterecord/{id}','ProfilesController@updateExperience');			// for profile edit experience modal page .---------


Route::group(array('middleware' => 'auth'), function()
{

	//get order list Revenues
	Route::get('/getorderlist','PaymentController@getlist');

	Route::get('viewmsgs','ProfilesController@viewmsgs');
	Route::get('viewmsgs/{id}','DashboardController@viewmessages');
        Route::post('sendmessenger','DashboardController@chat');

	//Routes for Portfilio
	Route::post('addportfilio','ProfilesController@addportfilio');
	Route::get('getportfilio','ProfilesController@getportfilio');
	Route::post('updateportfilio/{id}','ProfilesController@updateportfilio');
	Route::get('deleteportfilio/{id}','ProfilesController@deleteportfilio');
//Routes for Certificates
	Route::post('addcertificate','ProfilesController@addcertificate');
	Route::get('getcertificate','ProfilesController@getcertificate');
	Route::post('updatecertificate/{id}','ProfilesController@updatecertificate');
	Route::get('deletecertificate/{id}','ProfilesController@deletecertificate');
	Route::get('getUpdate','ProfilesController@getUpdate');			// for profile edit experience modal page .---------
	Route::post('updaterecord/{id}','ProfilesController@updateExperience');			// for profile edit experience modal page .---------
	/*
 * education Section Routes and action
 * **************************************************************************************************/
	Route::post('addeducation/', 'ProfilesController@addeducation');
	Route::get('geteduaction','ProfilesController@geteduaction');
	Route::post('updateeducation/{id}','ProfilesController@updateeducation');
	Route::get('deleteeducation/{id}','ProfilesController@deleteeducation');
	Route::get('managepost','DashboardController@managepost');	// for
	Route::get('managerequest','DashboardController@managerequest');	// for
	  //create offer proceed button
    Route::get('fetchofferproject/{id}','DashboardController@createoffer');
	//offer Reuest
	Route::get('offerrequest/{id}','DashboardController@requestoffer');
    //send seller offer
    Route::post('sendoffer/{id}','DashboardController@sendoffer');
	//send buyer offer
    Route::get('buyeroffer/{id}','DashboardController@sendbuyeroffer');
    //recieved offer
    Route::get('recievedoffers/all/{id}','DashboardController@showall');
    //message send from chat
    Route::post('/messagesent','DashboardController@messagesent');
    Route::post('viewmsgs/reply','DashboardController@reply');
    Route::post('/createoffer','DashboardController@submitoffer');
    Route::get('dashboard/loadsubcat/{id}','DashboardController@loadsubcategory');
    //apply for job
    Route::get('singlejob/{id}','JobController@applyforjob');
    //see inbox
    Route::get('conversation','DashboardController@conversation');

});

Route::get('blogs','BlogsController@index');
Route::get('blogs/create','BlogsController@create');
Route::get('blogs/{id}','BlogsController@show');			// viewing particular blog
Route::get('blogs/{id}/editblog','BlogsController@showeb');	// view for editing logged in user's old blog
Route::get('{id}/blogs','BlogsController@showpb');	// show particular profile's all blogs

Route::post('blogs','BlogsController@store');		// for saving new blog
Route::post('blogs/{id}','BlogsController@edit');	// for editing logged in user's  old blog
Route::delete('blogs/{id}','BlogsController@destroy');	// for deleting logged in user's  old blog

/* Note that: localhost:8000/editprofile and localhost:8000/profile are not to be official pages acc to me,
coz they arent generic, that's why i've made /p/{$id} -- for profile ; and /p/{$id}/editprofile

*/

/*
Route::get('/editprofile', function () {
		if (Auth::check()) {
			return view('editprofile');
		} else {
			return Redirect::to('login');
		}
	});
*/
Route::auth();

Route::get('{id}','ProfilesController@showExperience');			// for profile page .--------- make profile page here
Route::post('addexperience','ProfilesController@addExperience');			// for profile page .--------- make profile page here
Route::get('{id}/editprofile','ProfilesController@showep');		// for editing profile page ------ make edit profile here
Route::get('deleteexperience/{id}','ProfilesController@deleteExperience');		// for deleting experience profile page ------ make edit profile here

Route::post('{id}', 'ProfilesController@create');		// for posting data of edited profile

Route::get('{id}/{slug}','BlogsController@showslg');	// show particular profile's particular song
