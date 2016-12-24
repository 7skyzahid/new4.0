<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payment';
    protected $fillable = ['transaction_id','token_id','bid_id','propostid','userid'];
}
