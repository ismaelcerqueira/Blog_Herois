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

// Route::get('/herois', 'HeroisController@index')->name('herois.index');
// Route::get('/herois/create', 'HeroisController@create')->name('herois.create');
// Route::post('/herois/store', 'HeroisController@store')->name('herois.store');
// Route::get('/herois/edit/{id}', 'HeroisController@edit')->name('herois.edit');
// Route::get('/herois/show/{id}', 'HeroisController@show')->name('herois.show');
// Route::put('/herois/update/{id}', 'HeroisController@update')->name('herois.update');
// Route::delete('/herois/destoy/{id}', 'HeroisController@destroy')->name('herois.destroy');

Route :: resource ('herois', 'HeroisController');