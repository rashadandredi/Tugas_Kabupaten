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

Route::get('/', function(){
  return view('index');
});

Route::get('/','kab@index');
Route::resource('kab', 'Kab');
   Route::get('/', function(){
     return view('index');
   });

Route::get('/login', 'Login@index');
Route::post('login/cek', 'Login@cek');
Route::get('/', 'Dashboard@index');
Route::get('/logout','login@logout');


Route::get('/CleaningService', 'CleanerController@tables');
