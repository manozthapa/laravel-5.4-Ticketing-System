<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ticket(){
    	return $this->hasMany('App\Ticket');
    }
}
