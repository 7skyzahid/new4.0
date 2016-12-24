<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancerchat extends Model
{
    //
    protected $table = 'freelancerchat';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'freelancer_id', 'saller_id', 'msg','msgfrom',
    ];


}
