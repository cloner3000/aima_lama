<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
  	<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('img/favicon.png') }}">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Auditor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />


      <!-- Bootstrap core CSS     -->
      <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />

      <!-- Animation library for notifications   -->
      <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet"/>

      <!--  Paper Dashboard core CSS    -->
      <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" />
      <link href="{{ URL::asset('css/paper-dashboard.css') }}" rel="stylesheet"/>


      <!--  CSS for Demo Purpose, don't include it in your project     -->


      <!--  Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
      <link href="{{ URL::asset('css/themify-icons.css') }}" rel="stylesheet">

      @yield("css")
      <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
      </style>


  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar" data-background-color="white" data-active-color="danger">

          <!--
              Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
              Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
          -->

              <!-- <div class="sidebar-wrapper">
                  <div class="logo">
                      <a href="http://spm.um.ac.id/" class="simple-text">
                          SPM UM - Auditor
                      </a>
                  </div>

                  <ul class="nav">
                  @if (Request::is('standar1')||Request::is('standar1/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar1') }}">
                              <i class="ti-panel"></i>
                              <p>Standart 1</p>
                          </a>
                      </li>
                  @if (Request::is('standar2')||Request::is('standar2/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar2') }}">
                              <i class="ti-user"></i>
                              <p>Standart 2</p>
                          </a>
                      </li>
                  @if (Request::is('standar3')||Request::is('standar3/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar3') }}">
                              <i class="ti-view-list-alt"></i>
                              <p>Standart 3</p>
                          </a>
                      </li>
                  @if (Request::is('standar4')||Request::is('standar4/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar4') }}">
                              <i class="ti-text"></i>
                              <p>Standart 4</p>
                          </a>
                      </li>
                  @if (Request::is('standar5')||Request::is('standar5/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar5') }}">
                              <i class="ti-pencil-alt2"></i>
                              <p>Standart 5</p>
                          </a>
                      </li>
                  @if (Request::is('standar6')||Request::is('standar6/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar6') }}">
                              <i class="ti-map"></i>
                              <p>Standart 6</p>
                          </a>
                      </li>
                  @if (Request::is('standar7')||Request::is('standar7/*'))
                      <li class="active">
                  @else
                      <li>
                  @endif
                          <a href="{{ url('/standar7') }}">
                              <i class="ti-bell"></i>
                              <p>Standart 7</p>
                          </a>
                      </li>
                      <li class="active-pro">
                          <a href="{{ url('/rekap') }}">
                              <i class="ti-export"></i>
                              <p>Rekapitulasi</p>
                          </a>
                      </li>
                  </ul>
              </div> -->
          </div>

        <div class="main-panel" style="width:100%">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">AUDITOR</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            {{-- <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
    								<p>Hasil</p>
                                </a>
                            </li> --}}
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-user"></i>
    									<p>{{Session::get("userID")}}</p>
    									<b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ url('/servicelogout') }}">Logout</a></li>
                                    <!-- <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li> -->
                                  </ul>
                            </li>
    						<!-- <li>
                                <a href="#">
    								<i class="ti-settings"></i>
    								<p>Settings</p>
                                </a>
                            </li> -->
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Fakultas</th>
                            <th><div class="col-xs-4">Nama Prodi</div></th>
                            <th colspan=3 style="text-align:center">Aksi</th>

                          </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td>Fakultas Teknik</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="1">--Jurusan Teknik Elektro--</option>
                                    <option value="">Prodi S1 Pendidikan Teknik Informatika</option>
                                    <option value="">Prodi S1 Pendidikan Teknik Elektro</option>
                                    <option value="">Prodi S1 Teknik Informatika</option>
                                    <option value="">Prodi S1 Teknik Elektro</option>
                                    <option value="">Prodi D3 Teknik Elektro</option>
                                    <option value="">Prodi D3 Elektronika</option>
                                    <option value="">--Jurusan Teknik Sipil--</option>
                                    <option value="">Prodi S1 Pendidikan Teknik Bangunan</option>
                                    <option value="">Prodi S1 Teknik Sipil</option>
                                    <option value="">Prodi D3 Teknik Sipil dan Bangunan</option>
                                    <option value="">--Jurusan Teknik Mesin--</option>
                                    <option value="">Prodi S1 Pendidikan Teknik Mesin</option>
                                    <option value="">Prodi S1 Pendidikan Teknik Otomotif</option>
                                    <option value="">Prodi S1 Teknik Mesin</option>
                                    <option value="">Prodi D3 Teknik Mesin</option>
                                    <option value="">Prodi D3 Teknik Otomotif</option>
                                    <option value="">--Jurusan Teknologi Industri--</option>
                                    <option value="">Prodi S1 Pendidikan Tata Boga</option>
                                    <option value="">Prodi S1 Pendidikan Tata Busana</option>
                                    <option value="">Prodi D3 Tata Boga</option>
                                    <option value="">Prodi D3 Tata Busana</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Sastra</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Sastra Indonesia--</option>
                                    <option value="">Prodi S1 Pendidikan Bahasa Sastra Indonesia dan Daerah</option>
                                    <option value="">Prodi S1 Bahasa dan Sastra Indonesia</option>
                                    <option value="">Prodi S1 Ilmu Perpustakaan</option>
                                    <option value="">Prodi D3 Perpustakaan</option>
                                    <option value="">--Jurusan Sastra Inggris--</option>
                                    <option value="">Prodi S1 Pendidikan Bahasa Inggris</option>
                                    <option value="">Prodi S1 Bahasa dan Sastra Inggris</option>
                                    <option value="">--Jurusan Sastra Arab--</option>
                                    <option value="">Prodi S1 Pendidikan Bahasa Arab</option>
                                    <option value="">--Jurusan Sastra Jerman--</option>
                                    <option value="">Prodi S1 Pendidikan Bahasa Jerman</option>
                                    <option value="">--Jurusan Sastra Mandarin--</option>
                                    <option value="">Prodi S1 Pendidikan Bahasa Mandarin</option>
                                    <option value="">--Jurusan Seni dan Desain--</option>
                                    <option value="">Prodi S1 Pendidikan Seni Rupa</option>
                                    <option value="">Prodi S1 Pendidikan Seni Tari dan Musik</option>
                                    <option value="">Prodi S1 Desain Komunikasi Visual</option>
                                    <option value="">Prodi D3 Game Animasi</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Ilmu Pendidikan</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Bimbingan dan Konseling--</option>
                                    <option value="">Prodi S1 Bimbingan dan Konseling</option>
                                    <option value="">--Jurusan Teknologi Pendidikan--</option>
                                    <option value="">Prodi S1 Teknologi Pendidikan</option>
                                    <option value="">--Jurusan Administrasi Pendidikan--</option>
                                    <option value="">Prodi S1 Administrasi Pendidikan</option>
                                    <option value="">--Jurusan Pendidikan Luar Sekolah--</option>
                                    <option value="">Prodi S1 Pendidikan Luar Sekolah</option>
                                    <option value="">--Jurusan Kependidikan Sekolah Dasar dan Prasekolah--</option>
                                    <option value="">Prodi S1 Pendidikan Guru Sekolah Dasar</option>
                                    <option value="">Prodi S1 Pendidikan Guru Pendidikan Anak Usia Dini</option>
                                    <option value="">Prodi S1 Pendidikan Luar Biasa</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Matematika dan IPA</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Matematika--</option>
                                    <option value="">Prodi S1 Pendidikan Matematika</option>
                                    <option value="">Prodi S1 Matematika</option>
                                    <option value="">--Jurusan Fisika--</option>
                                    <option value="">Prodi S1 Pendidikan Fisika</option>
                                    <option value="">Prodi S1 Fisika</option>
                                    <option value="">--Jurusan Kimia--</option>
                                    <option value="">Prodi S1 Pendidikan Kimia</option>
                                    <option value="">Prodi S1 Kimia</option>
                                    <option value="">Prodi S1 Pendidikan Ilmu Pengetahuan Alam</option>
                                    <option value="">--Jurusan Biologi--</option>
                                    <option value="">Prodi S1 Pendidikan Biologi</option>
                                    <option value="">Prodi S1 Biologi</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Ilmu Keolahragaan</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Pendidikan Jasmani dan Kesehatan--</option>
                                    <option value="">Prodi S1 Pendidikan Jasmani dan Kesehatan</option>
                                    <option value="">--Jurusan Pendidikan Kepelatihan Olahraga--</option>
                                    <option value="">Prodi S1 Pendidikan Kepelatihan Olahraga</option>
                                    <option value="">--Jurusan Ilmu Keolahragaan--</option>
                                    <option value="">Prodi S1 Ilmu Keolahragaan</option>
                                    <option value="">--Jurusan Ilmu Kesehatan Masyarakat--</option>
                                    <option value="">Prodi S1 Ilmu Kesehatan Masyarakat</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Ilmu Sosial</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Hukum dan Kewarganegaraan--</option>
                                    <option value="">Prodi S1 Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <option value="">--Jurusan Geografi--</option>
                                    <option value="">Prodi S1 Pendidikan Geografi</option>
                                    <option value="">Prodi S1 Geografi</option>
                                    <option value="">--Jurusan Sejarah--</option>
                                    <option value="">Prodi S1 Pendidikan Sejarah</option>
                                    <option value="">Prodi S1 Ilmu Sejarah</option>
                                    <option value="">Prodi S1 Pendidikan Ilmu Pengetahuan Sosial</option>
                                    <option value="">Prodi S1 Pendidikan Sosiologi</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>

                            <tr>
                              <td>Fakultas Pendidikan Psikologi</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Psikologi--</option>
                                    <option value="">Prodi S1 Psikologi</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Rekapitulasi</button>
                              </td>
                              <td>
                                <div class="col-xs-3">
                                <button type="button" class="btn btn-primary btn-md">Lihat Isian</button>
                              </td>
                              <td>
                                <a href="auditor/isi/standar1" button type="button" class="btn btn-primary btn-md">Isi</a>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>


                    </div>
                  </div>
                  </div>
                </div>
            </div>
                    <div class="row">
                        @yield("content")
                    </div>


            <footer class="footer">

            </footer>

        </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ URL::asset('js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ URL::asset('js/chartist.min.js') }}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ URL::asset('js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::asset('js/demo.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

  @yield("js")


</html>
