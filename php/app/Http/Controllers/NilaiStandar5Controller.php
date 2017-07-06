<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar4 ;

class NilaiStandar5Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 5";
    return view("NilaiStandar5.index", compact('data', 'standar'));
  }
}
