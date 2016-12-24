<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'workexp';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'position', 'company','from', 'to', 'description',   
    ];

    public function profiles() {
        return $this->belongsTo('Profile');
    }

}