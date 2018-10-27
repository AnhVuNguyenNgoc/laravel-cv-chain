<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diploma;

class DiplomaController extends Controller
{
    //

    public function getList(){

    	$diploma = Diploma::all();

    	return view('diploma.list',['diploma'=>$diploma]);
    }
}
