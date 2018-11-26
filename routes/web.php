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

Route::get('/homee', function () {
    return view('homee');
});

Route::get('/room', function () {
    return view('room');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/react', function() {
    return view('react.root');
});
