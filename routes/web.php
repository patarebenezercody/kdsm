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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pdf', function(){
   $pdf = PDF::loadView('pdf');
   return $pdf->download('bilal.pdf');
});
Route::group(['middleware' => 'auth'], function () {
   Route::resource('balita', 'balitaController');
   Route::get('api/balita', 'balitaController@apiBalita')->name('api/balita');

   Route::resource('ibuhamil', 'ibuhamilController');
   Route::get('api/ibuhamil', 'ibuhamilController@apiIbuHamil')->name('api/ibuhamil');

   Route::resource('lansia', 'LansiaController');
   Route::get('api/lansia', 'LansiaController@apiLansia')->name('api/lansia');

   Route::resource('pengurus', 'rumahibadahController');
   Route::get('api/pengurus', 'rumahibadahController@apiPengurus')->name('api/pengurus');

   Route::resource('partisipasi', 'PartisipasiController');
   Route::get('api/partisipasi', 'PartisipasiController@apiPartisipasi')->name('api/partisipasi');

   Route::resource('uraian', 'UraianController');
   Route::get('api/uraian', 'UraianController@apiUraian')->name('api/uraian');

   Route::resource('bilal', 'BilalController');
   Route::get('api/bilal', 'BilalController@apiBilal')->name('api/bilal');

});   