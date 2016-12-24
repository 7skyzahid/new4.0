<?php

namespace App\Http\Controllers;

use File;
use Auth;
use App\User;
use App\Profile;
use App\Blog;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use App\Http\Requests;

class BlogsController extends Controller
{
    
    public function index()
    {
    	$blogs = Blog::latest()->paginate(10);
    	return view('blogs.index',compact('blogs'));
    }



    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show',compact('blog'));
    }

    public function showslg($id,$slug)
    {
        $blog = Blog::where('author',$id)->whereSlug($slug)->first();
        if(count($blog) > 0)
           return view('blogs.show',compact('blog'));
        else 
            return "No such blog exist!";
    }

    public function showpb($id)
    {
    	$blogs = Blog::where('author',$id)->latest()->get();
    	return view('blogs.pindex',compact('blogs','id'));
    }

    public function create()
    {
    	if (Auth::check()) {
            return view('blogs.create');
        } else {
            return Redirect::to('login');
        }
    }

    public function store()
    {
	   	$input = Input::all();
	   	$authuser = Auth::user()->name;
	   	
        $slug =str_slug($input['blogtitle']);
	   	
        $newblog = new Blog;
	   	$newblog->author = $authuser;
	   	$newblog->title = $input['blogtitle'];
	   	$newblog->body = $input['blogbody'];
	   	$newblog->slug = $slug;

        $newblog->save();

    	return redirect($authuser.'/blogs');
        
    }

    public function showeb($id)					// show edit blog for particular blog
    {
    	$authuser = Auth::user()->name;
    	$blog = Blog::findOrFail($id);
		if ((Auth::check() == true) && ($authuser == $blog->author)){
		   	return view('blogs.edit',compact('blog'));
    	}
    	else{
    		return 'Edit your own blogs';
    	}
    }

    public function edit($id)
    {
	   	$authuser = Auth::user()->name;
	   	$input = Input::all();
		
        $slug =str_slug($input['blogslug']);
        
		$blog = Blog::findOrFail($id);
		$blog->title = $input['blogtitle'];
		$blog->body = $input['blogbody'];
        $blog->slug = $slug;
		$blog->save();

    	return redirect($authuser.'/blogs');
   
    }

    public function destroy($id)
	{
    	$blog = Blog::findOrFail($id);
    	$blog->delete();
        $authuser = Auth::user()->name;
        return redirect($authuser.'/blogs');
    }

}