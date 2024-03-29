<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar2;
use App\Standar1;

class Standar2Controller extends Controller
{
  public function index(){
    $standar1 = Standar1::where("id_prodi", 1)->get();
    if($standar1->count() <= 0){
      return redirect('/standar1');
    }
    
    $standar2 = Standar2::where("id_prodi", 1)->get();
    $data=array();
    foreach ($standar2 as $data_standar2) {
      $data[$data_standar2->kode]=$data_standar2->kategori;
    }
    $standar="Standar 2";
    return view("standar2.index", compact('data', 'standar'));
  }

  public function save(Request $request){
    $timestamp = date("Y-m-d H:i:s");
    $data=array(
      array("kode"=>"2.1", "kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.2", "kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.6", "kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      );

    $standar2 = Standar2::insert($data);

    // $standar2->insert();

    return redirect()->back();
  }

  public function update(Request $request){
    if($request->skor2_1_old != $request->skor2_1){
      Standar2::where("kode", "2.1")->update(["kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1]);
    }

    if($request->skor2_2_old != $request->skor2_2){
      Standar2::where("kode", "2.2")->update(["kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2]);
    }

    if($request->skor2_6_old != $request->skor2_6){
      Standar2::where("kode", "2.6")->update(["kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6]);
    }

    return redirect()->back();
  }

}
