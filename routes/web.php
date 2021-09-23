<?php

use Illuminate\Support\Facades\Route;

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

//  Route::get('/index', function () {
//      return view('herois.index');
//  });

 Route::get('/create', function () {
    return view('herois.create');
});
Route::get('/', 'HeroisController@index')->name('index');
Route::post('/create', 'HeroisController@create');
Route::post('/store', 'HeroisController@store');



//   Route::get('/', 'EnderecosController@index')->name('index'); //Doc
// Route::delete('/delete/{id}', 'EnderecosController@destroy')->name('delete'); //doc
// Route::post('/', 'EnderecosController@store')->name('store'); //doc
// Route::put('/update/{id}', 'EnderecosController@update')->name('update'); //doc
// Route::get('/{id}', 'EnderecosController@show')->name('show'); //doc