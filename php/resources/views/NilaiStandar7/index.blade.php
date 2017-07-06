
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
              <a href="/rekap/nilaistandar3" class="btn btn-primary">Standar 3</a>
              <a href="/rekap/nilaistandar4" class="btn btn-primary">Standar 4</a>
              <a href="/rekap/nilaistandar5" class="btn btn-primary">Standar 5</a>
              <a href="/rekap/nilaistandar6" class="btn btn-primary">Standar 6</a>
              <a href="/rekap/nilaistandar7" class="btn btn-primary  active">Standar 7</a>
              </div>


              <div class="row">
                  <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <div class="card-content table-responsive">
                                    <h3 class="text-muted text-center">Belum mengisi data</h3>
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
