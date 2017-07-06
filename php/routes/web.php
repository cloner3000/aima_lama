<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/servicecheck','SecurityController@check');
Route::get('/servicelogout','SecurityController@logout');

// Route::group(['middleware' => 'auth_josso'], function() {
  Route::get('/', "Standar1Controller@index");
	Route::get("/standar1", "Standar1Controller@index");
	Route::post("/standar1/save", "Standar1Controller@save");
	Route::post("/standar1/update", "Standar1Controller@update");
	Route::get('/standar2', "Standar2Controller@index");
	Route::post('/standar2/save', "Standar2Controller@save");
	Route::post('/standar2/update', "Standar2Controller@update");
	Route::get('/standar3', 'Standar3Controller@index');
	Route::post('/standar3/save', 'Standar3Controller@save');
	Route::get('/standar4', 'Standar4Controller@index');
	Route::post('/standar4/save', 'Standar4Controller@save');
	Route::get('/standar5', 'Standar5Controller@index');
	Route::post('/standar5/save', 'Standar5Controller@save');
	Route::get('/standar7', "Standar7Controller@index");
	Route::post('/standar7/save', 'Standar7Controller@save');
	Route::get('/standar6', "Standar6Controller@index");
	Route::post('/standar6/save', "Standar6Controller@save");

  Route::get('/rekap', "NilaiStandar1Controller@index");
  Route::get('/rekap/nilaistandar1', "NilaiStandar1Controller@index");
  Route::get('/rekap/nilaistandar2', "NilaiStandar2Controller@index");
  Route::get('/rekap/nilaistandar3', "NilaiStandar3Controller@index");
  Route::get('/rekap/nilaistandar4', "NilaiStandar4Controller@index");
  Route::get('/rekap/nilaistandar5', "NilaiStandar5Controller@index");
  Route::get('/rekap/nilaistandar6', "NilaiStandar6Controller@index");
  Route::get('/rekap/nilaistandar7', "NilaiStandar7Controller@index");

  Route::get('/auditor', "AuditorController@index");
  Route::post('/auditor', "AuditorController@isi");
  //auditor
  Route::get("/auditor/isi/{idprodi}/standar1", "Standar1AuditorController@index");
  Route::post("/auditor/isi/{idprodi}/standar1/save", "Standar1AuditorController@save");
  Route::post("/auditor/isi/{idprodi}/standar1/update", "Standar1AuditorController@update");
  Route::get('/auditor/isi/{idprodi}/standar2', "Standar2AuditorController@index");
  Route::post('/auditor/isi/{idprodi}/standar2/save', "Standar2AuditorController@save");
  Route::post('/auditor/isi/{idprodi}/standar2/update', "Standar2AuditorController@update");
  Route::get('/auditor/isi/{idprodi}/standar3', 'Standar3AuditorController@index');
  Route::post('/auditor/isi/{idprodi}/standar3/save', 'Standar3AuditorController@save');
  Route::get('/auditor/isi/{idprodi}/standar4', 'Standar4AuditorController@index');
  Route::post('/auditor/isi/{idprodi}/standar4/save', 'Standar4AuditorController@save');
  Route::get('/auditor/isi/{idprodi}/standar5', 'Standar5AuditorController@index');
  Route::post('/auditor/isi/{idprodi}/standar5/save', 'Standar5AuditorController@save');
  Route::get('/auditor/isi/{idprodi}/standar7', "Standar7AuditorController@index");
  Route::post('/auditor/isi/{idprodi}/standar7/save', 'Standar7AuditorController@save');
  Route::get('/auditor/isi/{idprodi}/standar6', "Standar6AuditorController@index");
  Route::post('/auditor/isi/{idprodi}/standar6/save', "Standar6AuditorController@save");
// });
