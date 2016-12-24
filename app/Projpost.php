<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Projpost extends Model
{
    protected $table = 'projposts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 'title', 'description', 'payment_type', 'starttime', 'deadline', 'tags', 'amount', 'status', 'accepted_bid_id' 
    ];

    public function profiles() {
        return $this->belongsTo('Profile');
    }

    public function projbids() {
        return $this->hasMany('Projbid');
    }

}