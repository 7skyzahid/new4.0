<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelancersStatus extends Model
{
    //
    protected $table = 'freelancerstatus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'freelancer_id', 'freelancer_status',
    ];

}
