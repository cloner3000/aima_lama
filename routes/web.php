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

Route::get('/', "Standart2Controller@index");
Route::get('/standart2', "Standart2Controller@index");
Route::post('/standart2/save', "Standart2Controller@save");
