<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar6 ;

class NilaiStandar6Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 6";
    $nilaistandar6=NilaiStandar6::select('kode','kategori')->get();

    $total=0;
    foreach ($nilaistandar6 as $value) {
      $total +=$value->kategori;
    }
    return view("NilaiStandar6.index", compact('nilaistandar6', 'standar','total'));
  }
}
