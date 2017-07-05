<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar4 ;

class NilaiStandar4Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 4";
    return view("NilaiStandar4.index", compact('data', 'standar'));
  }
}
