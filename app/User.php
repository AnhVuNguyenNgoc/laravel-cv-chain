<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
     protected $table="User";

 	 public function Diploma()
 	 {
 	 	return $this->hasMany('App\Diploma','user_name','user_name');
 	 }
}
