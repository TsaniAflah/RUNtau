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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/news', function () {
    return view('news');
});

//Melakukan READ
Route::get('/tampildata', 'ReservasiController@readdata');
//Melakukan INPUT
Route::get('/tambahdata', 'ReservasiController@input');
//Melakukan STORING
Route::post('/activity/store', 'ReservasiController@store');
//Melakukan EDIT
Route::get('/activity/edit/{Course}', 'ReservasiController@edit');
//Melakukan UPDATE
Route::post('/activity/update', 'ReservasiController@update');
//Melakukan DELETE
Route::get('/activity/hapus/{Course}', 'ReservasiController@hapus');
