<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
     protected $table="majors";

	 public function Diploma()
 	 {
 	 	return $this->hasMany('App\Diploma','major_id','id');
 	 }
}
