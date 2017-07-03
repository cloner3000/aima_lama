<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar1;

class Standar1Controller extends Controller
{
    //

    public function index(){
    	$data=null;
    	$standar="Standar 1";
    	return view("standar1.index", compact('data', 'standar'));
    }
}
