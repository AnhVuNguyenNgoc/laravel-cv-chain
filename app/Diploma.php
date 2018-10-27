<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    //
    protected $table="diplomas";

   	public function User()
   	{
 	 	return $this->belongsTo('App\User','user_name','user_name');
 	 }

 	 	public function Major()
   	{
 	 	return $this->belongsTo('App\Major','major_id','id');
 	 }

}
