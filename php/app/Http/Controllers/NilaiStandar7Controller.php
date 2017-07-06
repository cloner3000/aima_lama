<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar4 ;

class NilaiStandar7Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 7";
    return view("NilaiStandar7.index", compact('data', 'standar'));
  }
}
