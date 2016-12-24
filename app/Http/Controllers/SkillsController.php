<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Skills;
use Auth;
use App\Profile;
use App\Blog;
use Validator;
use Session;
class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $authuser = Auth::user()->name;
        if(  $uprof = Skills::where('username',$authuser)->first()){
            $uprof->username = $authuser;
            $uprof->title = $request->skills;
            $uprof->update();
        } else {
            $skills = new Skills();
            $skills->username = $authuser;
            $skills->title = $request->skills;
            $skills->save();
        }
         $skills = Skills::where('username',$authuser)->first();
        return redirect($authuser)->with('skills',$skills);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $skill = new skills();
        $authuser = Auth::user()->name;
       $skill->username = $authuser;

         $skill->company = $request->company;
         $skill->location = $request->location;
         $skill->country=$request->country;     
         $skill->title=$request->title;     
         $skill->role=$request->role;   
         $skill->fmonth=$request->fmonth;  
         $skill->fyear=$request->fyear; 
         $skill->tomonth=$request->tomonth; 
         $skill->toyear=$request->toyear;   
         $skill->current=$request->current;     
         $skill->description=$request->description;
         $skill->save();    
        Session::flash('success','The Skill was successfully saved');
        return redirect('dashboard/viewSkill') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        //return "OK";
        $skill = skills::all();
        return view('dashboard.viewSkill')->withSkills($skill);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       // return "OK";
        $skills = skills::find($id);
        //return $skills;
        return view('dashboard.editSkill')->with('skill',$skills);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       // return "ok";
         $skill = skills::find($id);
         $skill->company = $request->company;
         $skill->location = $request->location;
         $skill->country=$request->country;     
         $skill->title=$request->title;     
         $skill->role=$request->role;   
         $skill->fmonth=$request->fmonth;   
         $skill->fyear=$request->fyear; 
         $skill->tomonth=$request->tomonth; 
         $skill->toyear=$request->toyear;   
         $skill->current=$request->current;     
         $skill->description=$request->description;
         $skill->save();    
        Session::flash('success','The Skill was successfully updated');
        return redirect('dashboard/viewSkill') ;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "OK";
        //
        $post = skills::find($id);
        $post->delete();
         Session::flash('success','The Skill was successfully Deleted');
        return redirect('dashboard/viewSkill') ;

    }
}
