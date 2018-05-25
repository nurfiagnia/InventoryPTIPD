s<?php

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

Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::post('/loginpost','LoginController@login');

Route::get('/logout','LoginController@logout');

Route::get('/Dashboard Admin', 'adminController@dashboard')->middleware('auth:admins');



//-----------------Barang-------------------------------
Route::get('/inputBarang', 'barangController@input');
Route::post('/simpanBarang', 'barangController@insert');

Route::get('/table barang', 'barangController@table');

Route::get('/{id}/edit', 'barangController@edit');
Route::post('/{id}/updateBarang', 'barangController@update');

Route::get('/{id}/delete', 'barangController@delete');

//--------------------Ruangan------------------------------

Route::get('/inputRuangan', 'ruanganController@input');
Route::post('/simpanRuangan', 'ruanganController@insert');

Route::get('/table ruangan', 'ruanganController@table_ruangan');

Route::get('/{id}/editRuangan', 'ruanganController@edit_ruangan');
Route::post('/{id}/updateRuangan', 'ruanganController@updateRuangan');

Route::get('/{id}/delete', 'ruanganController@delete');