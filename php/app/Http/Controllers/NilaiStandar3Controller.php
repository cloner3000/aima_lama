<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar3 ;

class NilaiStandar3Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 3";
    return view("NilaiStandar3.index", compact('data', 'standar'));
  }
}
