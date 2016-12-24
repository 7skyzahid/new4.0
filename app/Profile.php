<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'profilepic', 'briefdescription', 'address', 'city', 'country', 'website', 'gitlink', 'fblink', 'twitlink', 'lilink', 'languages', 'about', 'interests', 'keywords',   
    ];

    public function education() {
        return $this->hasMany('Educatn');
    }

    public function workexp() {
        return $this->hasMany('Experience');
    }

    public function volwork() {
        return $this->hasMany('VolunteerWork');
    }

    public function affiliates() {
        return $this->hasMany('Affiliate');
    }
        
    public function user() {
        return $this->belongsTo('User'); // this matches the Eloquent model
    }

    public function blogs() {
        return $this->hasMany('Blog');
    }

    public function projposts() {
        return $this->hasMany('Projpost');
    }

}