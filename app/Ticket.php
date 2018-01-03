<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category'); 
	}

	public function user(){
		return $this->belongsTo('App\User');
	}
}