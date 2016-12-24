<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Educatn extends Model
{
    protected $table = 'education';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'degree', 'studylevel', 'institute', 'from', 'to', 'description',   
    ];

    public function profiles() {
        return $this->belongsTo('Profile');
    }

}