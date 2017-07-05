<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar2 ;

class NilaiStandar2Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 2";
    return view("NilaiStandar2.index", compact('data', 'standar'));
  }
}
