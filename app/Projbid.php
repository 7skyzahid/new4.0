<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Projbid extends Model
{
    protected $table = 'projbids';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projpost_id', 'username', 'description', 'amount', 'acceptstatus',
    ];

    public function profiles() {
        return $this->belongsTo('Profile');
    }

    public function projposts() {
        return $this->belongsTo('Projpost');
    }

}