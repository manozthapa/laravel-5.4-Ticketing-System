<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function user(){
    	$this->belongsTo('App\User');
    }
}
