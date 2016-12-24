<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class VolunteerWork extends Model
{
    protected $table = 'volwork';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'team', 'company','from', 'to', 'description',   
    ];

    public function profiles() {
        return $this->belongsTo('Profile');
    }

}