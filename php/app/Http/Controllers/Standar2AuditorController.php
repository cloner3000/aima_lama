<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar2Auditor;
use App\Standar1Auditor;

class Standar2AuditorController extends Controller
{
  public function index($idprodi){
    $standar1 = Standar1Auditor::where("id_prodi", $idprodi)->get();
    if($standar1->count() <= 0){
      $adadata = false;
      return redirect("/auditor/isi/$idprodi/standar1");
    }else{
      $adadata = true;
    }
    $standar2 = Standar2Auditor::where("id_prodi", $idprodi)->get();
    $data=array();
    foreach ($standar2 as $data_standar2) {
      $data[$data_standar2->kode]=$data_standar2->kategori;
    }
    $standar="Standar 2";
    return view("auditor/standar2.index", compact('data', 'standar', 'adadata', 'idprodi'));
  }

  public function save(Request $request, $idprodi){
    $timestamp = date("Y-m-d H:i:s");
    $data=array(
      array("kode"=>"2.1", "kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.2", "kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.6", "kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
      );

    $standar2 = Standar2Auditor::insert($data);

    // $standar2->insert();

    return redirect()->back();
  }

  public function update(Request $request, $idprodi){
    if($request->skor2_1_old != $request->skor2_1){
      Standar2Auditor::where([["kode", "2.1"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1]);
    }

    if($request->skor2_2_old != $request->skor2_2){
      Standar2Auditor::where([["kode", "2.2"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2]);
    }

    if($request->skor2_6_old != $request->skor2_6){
      Standar2Auditor::where([["kode", "2.6"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6]);
    }

    return redirect()->back();
  }

}
