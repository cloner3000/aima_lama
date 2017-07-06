
@extends("layout")
@section("content")

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">REKAPITULASI (Lihat Nilai)</h4>
            <p class="category">Prodi Pendidikan Teknik Informatika</p>
        </div>

        <div class="content">
            <form

            <div class="btn-group btn-group-justified">
              <a href="/rekap/nilaistandar1" class="btn btn-primary">Standar 1</a>
              <a href="/rekap/nilaistandar2" class="btn btn-primary">Standar 2</a>
              <a href="/rekap/nilaistandar3" class="btn btn-primary active">Standar 3</a>
              <a href="/rekap/nilaistandar4" class="btn btn-primary">Standar 4</a>
              <a href="/rekap/nilaistandar5" class="btn btn-primary">Standar 5</a>
              <a href="/rekap/nilaistandar6" class="btn btn-primary">Standar 6</a>
              <a href="/rekap/nilaistandar7" class="btn btn-primary">Standar 7</a>
              </div>


              <div class="row">
                  <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <div class="card-content table-responsive">
                                    <table border="1"  class="table">
                                      <thead>
                                    <tr class="warning">
                                      <td width="100px"> 3.1.1.a </td>
      																<td width="100px"> 3.1.1.b </td>
      																<td width="100px"> 3.1.1.c </td>
      																<td width="100px"> 3.1.1.d </td>
      																<td width="100px"> 3.1.2 </td>
      																<td width="100px"> 3.1.3 </td>
      																<td width="100px"> 3.1.4.a </td>
      																<td width="100px"> 3.1.4.b </td>
      																<td width="100px"> 3.2.1 </td>
      																<td width="100px"> 3.2.1 </td>
      																<td width="100px"> 3.2.2 </td>
      																<td width="100px"> 3.3.1.b </td>
      																<td width="100px"> 3.3.1.c </td>
      																<td width="100px"> 3.3.2</td>
      																<td width="100px"> 3.3.3</td>
      																<td width="100px"> 3.4.1</td>
      																<td width="100px"> 3.4.2</td>
                                      <td width="100px"> Total Nilai</td>
                                    </tr>

                                    <td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
      															<td>0</td>
                                    <td>0</td>

                                  </thead>
                                  </table>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>

@endsection
