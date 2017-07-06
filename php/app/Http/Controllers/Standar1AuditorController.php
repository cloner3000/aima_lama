<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar1Auditor;

class Standar1AuditorController extends Controller
{
    public function index(Request $request, $idprodi){
      $standar1 = Standar1Auditor::where("id_prodi", $idprodi)->get();
    	$data=array();
      foreach ($standar1 as $data_standar1) {
        $data[$data_standar1->kode] = $data_standar1->kategori;
      }
    	$standar="Standar 1";
    	return view("auditor/standar1.index", compact('idprodi', 'data', 'standar'));
    }

    public function save(Request $request, $idprodi){
      $timestamp = date("Y-m-d H:i:s");
      $data=array(
        array("kode"=>"1.1.a", "kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"1.1.b", "kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"1.2", "kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2, "id_prodi"=>$idprodi, "auditor_id"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        );

      $standar1 = Standar1Auditor::insert($data);

      // $standar2->insert();

      return redirect()->back();
    }

    public function update(Request $request, $idprodi){
      if($request->skor1_1_a_old != $request->skor1_1_a){
        Standar1Auditor::where([["kode", "1.1.a"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a]);
      }

      if($request->skor1_1_b_old != $request->skor1_1_b){
        Standar1Auditor::where([["kode", "1.1.b"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b]);
      }

      if($request->skor1_2_old != $request->skor1_2){
        Standar1Auditor::where([["kode", "1.2"], ["id_prodi", $idprodi]])->update(["kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2]);
      }

      return redirect()->back();
    }
}
