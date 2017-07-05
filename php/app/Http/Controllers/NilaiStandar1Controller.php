<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar1 ;

class NilaiStandar1Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 1";
    return view("NilaiStandar1.index", compact('data', 'standar'));
  }
}
