<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservasiController;
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
})->middleware('auth');

Route::get('/help', function () {
    return view('help');
})->middleware('auth');

Route::get('/runtaufood', function () {
    return view('runtaufood');
})->middleware('auth');

Route::get('/runtaumoney', function () {
    return view('runtaumoney');
})->middleware('auth');

Route::get('/runtauplace', function () {
    return view('runtauplace');
})->middleware('auth');

Route::get('/runtauhealth', function () {
    return view('runtauhealth');
})->middleware('auth');

Route::get('/runtaustore', function () {
    return view('runtaustore');
})->middleware('auth');


//Melakukan READ
Route::get('/tampildata', 'ReservasiController@readdata');
//Melakukan INPUT
Route::get('/tambahdata', 'ReservasiController@input')->middleware('auth');
//Melakukan STORING
Route::post('/activity/store', 'ReservasiController@store');
//Melakukan EDIT
Route::get('/activity/edit/{Course}', 'ReservasiController@edit')->middleware('auth');
//Melakukan UPDATE
Route::post('/activity/update', 'ReservasiController@update');
//Melakukan DELETE
Route::get('/activity/hapus/{Course}', 'ReservasiController@hapus')->middleware('auth');

Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index')->middleware('guest');
Route::post('/register', 'RegisterController@store');