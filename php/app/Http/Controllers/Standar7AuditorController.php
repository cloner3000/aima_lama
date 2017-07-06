<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar7Auditor;
use App\Standar6Auditor;

class Standar7AuditorController extends Controller
{
    public function index($idprodi){
      $standar6 = Standar6Auditor::where("id_prodi", $idprodi)->get();
      if($standar6->count() <= 0){
        $adadata = false;
        return redirect("/auditor/isi/$idprodi/standar6");
      }else{
        $adadata = true;
      }
      $standar="Standar 7";
      $data = Standar7Auditor::select('kode', 'data', 'skor', 'kategori')->where([['id_prodi', '=', $idprodi],
      ['auditor_id', '=', '1']])->orderBy('kode', 'asc')->get();
      if(!$data->count()){
        $dataCheck = true;
      }else{
        $dataCheck = false;
      }
      return view('auditor/standar7.index', compact('standar', 'data', 'dataCheck', 'idprodi'));
    }

    public function save(Request $request, $idprodi){
      //dd($request->all());

      //perhitungan kategori 7.1.1
      $nk7_1_1 = (4 * $request->na7_1_1 + 2 * $request->nb7_1_1 + $request->nc7_1_1)/$request->f7_1_1;
      if($nk7_1_1 >= 2){
        $kategori7_1_1 = 4;
      }elseif($nk7_1_1 > 0){
        $kategori7_1_1 = (1.5 * $nk7_1_1) + 1;
      }elseif($nk7_1_1 <= 0){
        $kategori7_1_1 = 0;
      }
      $kategori7_1_1 = intval(round($kategori7_1_1));
      //$data7_1_1 = $request->na7_1_1 . ";". $request->nb7_1_1 . ";". $request->nc7_1_1 . ";". $request->f7_1_1;
      $data7_1_1 = '['.$request->na7_1_1.','.$request->nb7_1_1.','.$request->nc7_1_1.','.$request->f7_1_1.']';
      $skor7_1_1 = $nk7_1_1;

      //perhitungan kategori 7.1.2
      if($request->pd7_1_2 >= 25){
        $kategori7_1_2 = 4;
      }elseif($request->pd7_1_2 > 0){
        $kategori7_1_2 = 1 + ((12 * $request->pd7_1_2) / 100);
      }elseif($request->pd7_1_2 <= 0){
        $kategori7_1_2 = 0;
      }
      $kategori7_1_2 = intval(round($kategori7_1_2));
      //$data7_1_2 = $request->pd7_1_2;
      $data7_1_2 = '['.$request->pd7_1_2.']';
      $skor7_1_2 = $request->pd7_1_2;

      //perhitungan kategori 7.1.3
      $nk7_1_3 = (4 * $request->na7_1_3 + 2 * $request->nb7_1_3 + $request->nc7_1_3)/$request->f7_1_3;
      if($nk7_1_3 >= 6){
        $kategori7_1_3 = 4;
      }elseif($nk7_1_3 > 0){
        $kategori7_1_3 = 1 + ($nk7_1_3 / 2);
      }elseif($nk7_1_3 <= 0){
        $kategori7_1_3 = 0;
      }
      $kategori7_1_3 = intval(round($kategori7_1_3));
      //$data7_1_3 = $request->na7_1_3 . ";" . $request->nb7_1_3 . ";" . $request->nc7_1_3 . ";" . $request->f7_1_3;
      $data7_1_3 = '['.$request->na7_1_3.','.$request->nb7_1_3.','.$request->nc7_1_3.','.$request->f7_1_3.']';
      $skor7_1_3 = $nk7_1_3;

      //perhitungan kategori 7.1.4
      $kategori7_1_4 = $request->n7_1_4;
      $kategori7_1_4 = intval(round($kategori7_1_4));
      // $data7_1_4 = $request->n7_1_4;
      $data7_1_4 = '['.$request->n7_1_4.']';
      $skor7_1_4 = $request->n7_1_4;

      //perhitungan kategori 7.2.1
      $nk7_2_1 = (4 * $request->na7_2_1 + 2 * $request->nb7_2_1 + $request->nc7_2_1)/$request->f7_2_1;
      if($nk7_2_1 >= 1){
        $kategori7_2_1 = 4;
      }elseif($nk7_2_1 > 0){
        $kategori7_2_1 = (3 * $nk7_2_1) + 1;
      }elseif($nk7_2_1 <= 0){
        $kategori7_2_1 = 0;
      }
      $kategori7_2_1 = intval(round($kategori7_2_1));
      // $data7_2_1 = $request->na7_2_1 . ";" . $request->nb7_2_1 . ";" . $request->nc7_2_1 . ";" .  $request->f7_2_1;
      $data7_2_1 = '['.$request->na7_2_1.','.$request->nb7_2_1.','.$request->nc7_2_1.','.$request->f7_2_1.']';
      $skor7_2_1 = $nk7_2_1;

      //return ($kategori7_1_1 . ", " . $kategori7_1_2 . ", " . $kategori7_1_3 . ", " . $kategori7_1_4 . ", " . $kategori7_2_1);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar7 = Standar7Auditor::where('id_prodi', '=', $idprodi)->first();
      if($oldStandar7){
        //jika sudah maka ...

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', '1'],
          ['kode', '=', '7.1.1']
        ])->first();
        $standar7->kategori = $kategori7_1_1;
        $standar7->data = $data7_1_1;
        $standar7->skor = $skor7_1_1;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', '1'],
          ['kode', '=', '7.1.2']
        ])->first();
        $standar7->kategori = $kategori7_1_2;
        $standar7->data = $data7_1_2;
        $standar7->skor = $skor7_1_2;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', '1'],
          ['kode', '=', '7.1.3']
        ])->first();
        $standar7->kategori = $kategori7_1_3;
        $standar7->data = $data7_1_3;
        $standar7->skor = $skor7_1_3;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', '1'],
          ['kode', '=', '7.1.4']
        ])->first();
        $standar7->kategori = $kategori7_1_4;
        $standar7->data = $data7_1_4;
        $standar7->skor = $skor7_1_4;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', '1'],
          ['kode', '=', '7.2.1']
        ])->first();
        $standar7->kategori = $kategori7_2_1;
        $standar7->data = $data7_2_1;
        $standar7->skor = $skor7_2_1;
        $standar7->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.1';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id='1';
        $standar7->kategori = $kategori7_1_1;
        $standar7->data = $data7_1_1;
        $standar7->skor = $skor7_1_1;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.2';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id='1';
        $standar7->kategori = $kategori7_1_2;
        $standar7->data = $data7_1_2;
        $standar7->skor = $skor7_1_2;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.3';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id='1';
        $standar7->kategori = $kategori7_1_3;
        $standar7->data = $data7_1_3;
        $standar7->skor = $skor7_1_3;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.4';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id='1';
        $standar7->kategori = $kategori7_1_4;
        $standar7->data = $data7_1_4;
        $standar7->skor = $skor7_1_4;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.2.1';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id='1';
        $standar7->kategori = $kategori7_2_1;
        $standar7->data = $data7_2_1;
        $standar7->skor = $skor7_2_1;
        $standar7->save();

        // return "saved";
      }

      return redirect()->back();

    }
}
