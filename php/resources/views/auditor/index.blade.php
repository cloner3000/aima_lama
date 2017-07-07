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
                              <form id="formft" action="" method="post">
                                {{ csrf_field() }}
                                <td>Fakultas Teknik</td>
                                <td>
                                  <div class="col-xs-5">
                                    <select class="form-control border-input" name="idprodi">
                                    <option>--Pilih Prodi--</option>
                                      <option value="">--Jurusan Teknik Elektro--</option>
                                      <option value="1">Prodi S1 Pendidikan Teknik Informatika</option>
                                      <option value="2">Prodi S1 Pendidikan Teknik Elektro</option>
                                      <option value="3">Prodi S1 Teknik Informatika</option>
                                      <option value="4">Prodi S1 Teknik Elektro</option>
                                      <option value="5">Prodi D3 Teknik Elektro</option>
                                      <option value="6">Prodi D3 Elektronika</option>
                                      <option value="">--Jurusan Teknik Sipil--</option>
                                      <option value="7">Prodi S1 Pendidikan Teknik Bangunan</option>
                                      <option value="8">Prodi S1 Teknik Sipil</option>
                                      <option value="9">Prodi D3 Teknik Sipil dan Bangunan</option>
                                      <option value="">--Jurusan Teknik Mesin--</option>
                                      <option value="10">Prodi S1 Pendidikan Teknik Mesin</option>
                                      <option value="11">Prodi S1 Pendidikan Teknik Otomotif</option>
                                      <option value="12">Prodi S1 Teknik Mesin</option>
                                      <option value="13">Prodi D3 Teknik Mesin</option>
                                      <option value="14">Prodi D3 Teknik Otomotif</option>
                                      <option value="">--Jurusan Teknologi Industri--</option>
                                      <option value="15">Prodi S1 Pendidikan Tata Boga</option>
                                      <option value="16">Prodi S1 Pendidikan Tata Busana</option>
                                      <option value="17">Prodi D3 Tata Boga</option>
                                      <option value="18">Prodi D3 Tata Busana</option>
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
                                  <button type="button" onclick="document.getElementById('formft').submit();" class="btn btn-primary btn-md">Isi</button>
                                </td>
                              </form>
                            </tr>

                            <tr>
                              <form id="formfs" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Sastra</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="idprodi">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Sastra Indonesia--</option>
                                    <option value="19">Prodi S1 Pendidikan Bahasa Sastra Indonesia dan Daerah</option>
                                    <option value="20">Prodi S1 Bahasa dan Sastra Indonesia</option>
                                    <option value="21">Prodi S1 Ilmu Perpustakaan</option>
                                    <option value="22">Prodi D3 Perpustakaan</option>
                                    <option value="">--Jurusan Sastra Inggris--</option>
                                    <option value="23">Prodi S1 Pendidikan Bahasa Inggris</option>
                                    <option value="24">Prodi S1 Bahasa dan Sastra Inggris</option>
                                    <option value="">--Jurusan Sastra Arab--</option>
                                    <option value="25">Prodi S1 Pendidikan Bahasa Arab</option>
                                    <option value="">--Jurusan Sastra Jerman--</option>
                                    <option value="26">Prodi S1 Pendidikan Bahasa Jerman</option>
                                    <option value="">--Jurusan Sastra Mandarin--</option>
                                    <option value="27">Prodi S1 Pendidikan Bahasa Mandarin</option>
                                    <option value="">--Jurusan Seni dan Desain--</option>
                                    <option value="28">Prodi S1 Pendidikan Seni Rupa</option>
                                    <option value="29">Prodi S1 Pendidikan Seni Tari dan Musik</option>
                                    <option value="30">Prodi S1 Desain Komunikasi Visual</option>
                                    <option value="31">Prodi D3 Game Animasi</option>
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
                                <button type="button" onclick="document.getElementById('formfs').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
                            </tr>

                            <tr>
                              <form id="formfip" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Ilmu Pendidikan</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="idprodi">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Bimbingan dan Konseling--</option>
                                    <option value="32">Prodi S1 Bimbingan dan Konseling</option>
                                    <option value="">--Jurusan Teknologi Pendidikan--</option>
                                    <option value="33">Prodi S1 Teknologi Pendidikan</option>
                                    <option value="">--Jurusan Administrasi Pendidikan--</option>
                                    <option value="34">Prodi S1 Administrasi Pendidikan</option>
                                    <option value="">--Jurusan Pendidikan Luar Sekolah--</option>
                                    <option value="35">Prodi S1 Pendidikan Luar Sekolah</option>
                                    <option value="">--Jurusan Kependidikan Sekolah Dasar dan Prasekolah--</option>
                                    <option value="36">Prodi S1 Pendidikan Guru Sekolah Dasar</option>
                                    <option value="37">Prodi S1 Pendidikan Guru Pendidikan Anak Usia Dini</option>
                                    <option value="38">Prodi S1 Pendidikan Luar Biasa</option>
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
                                <button type="button" onclick="document.getElementById('formfip').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
                            </tr>

                            <tr>
                              <form id="formmipa" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Matematika dan IPA</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="idprodi">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Matematika--</option>
                                    <option value="39">Prodi S1 Pendidikan Matematika</option>
                                    <option value="40">Prodi S1 Matematika</option>
                                    <option value="">--Jurusan Fisika--</option>
                                    <option value="41">Prodi S1 Pendidikan Fisika</option>
                                    <option value="42">Prodi S1 Fisika</option>
                                    <option value="">--Jurusan Kimia--</option>
                                    <option value="43">Prodi S1 Pendidikan Kimia</option>
                                    <option value="44">Prodi S1 Kimia</option>
                                    <option value="45">Prodi S1 Pendidikan Ilmu Pengetahuan Alam</option>
                                    <option value="">--Jurusan Biologi--</option>
                                    <option value="46">Prodi S1 Pendidikan Biologi</option>
                                    <option value="47">Prodi S1 Biologi</option>
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
                                <button type="button" onclick="document.getElementById('formmipa').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
                            </tr>

                            <tr>
                              <form id="formfik" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Ilmu Keolahragaan</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="idprodi">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Pendidikan Jasmani dan Kesehatan--</option>
                                    <option value="48">Prodi S1 Pendidikan Jasmani dan Kesehatan</option>
                                    <option value="">--Jurusan Pendidikan Kepelatihan Olahraga--</option>
                                    <option value="49">Prodi S1 Pendidikan Kepelatihan Olahraga</option>
                                    <option value="">--Jurusan Ilmu Keolahragaan--</option>
                                    <option value="50">Prodi S1 Ilmu Keolahragaan</option>
                                    <option value="">--Jurusan Ilmu Kesehatan Masyarakat--</option>
                                    <option value="51">Prodi S1 Ilmu Kesehatan Masyarakat</option>
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
                                <button type="button" onclick="document.getElementById('formfik').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
                            </tr>

                            <tr>
                              <form id="formfis" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Ilmu Sosial</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="idprodi">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Hukum dan Kewarganegaraan--</option>
                                    <option value="52">Prodi S1 Pendidikan Pancasila dan Kewarganegaraan</option>
                                    <option value="">--Jurusan Geografi--</option>
                                    <option value="53">Prodi S1 Pendidikan Geografi</option>
                                    <option value="54">Prodi S1 Geografi</option>
                                    <option value="">--Jurusan Sejarah--</option>
                                    <option value="55">Prodi S1 Pendidikan Sejarah</option>
                                    <option value="56">Prodi S1 Ilmu Sejarah</option>
                                    <option value="57">Prodi S1 Pendidikan Ilmu Pengetahuan Sosial</option>
                                    <option value="58">Prodi S1 Pendidikan Sosiologi</option>
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
                                <button type="button" onclick="document.getElementById('formfis').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
                            </tr>

                            <tr>
                              <form id="formfppsi" action="" method="post">
                                {{ csrf_field() }}
                              <td>Fakultas Pendidikan Psikologi</td>
                              <td>
                                <div class="col-xs-5">
                                  <select class="form-control border-input" name="">
                                  <option>--Pilih Prodi--</option>
                                    <option value="">--Jurusan Psikologi--</option>
                                    <option value="59">Prodi S1 Psikologi</option>
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
                                <button type="button" onclick="document.getElementById('formfppsi').submit();" class="btn btn-primary btn-md">Isi</button>
                              </td>
                            </form>
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
