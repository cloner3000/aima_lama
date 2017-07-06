<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar4 ;

class NilaiStandar6Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 6";
    return view("NilaiStandar6.index", compact('data', 'standar'));
  }
}
