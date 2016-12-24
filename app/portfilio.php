<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfilio extends Model
{
    protected $table = 'portfilio';
    protected $fillable = ['title','description','image'];
}
