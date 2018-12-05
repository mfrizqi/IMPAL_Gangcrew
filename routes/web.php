<?php

use App\User;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/room', function () {
    return view('room');
})->name('room');

Route::get('/dining', function () {
    return view('dining');
})->name('dining');

Route::get('/checkroom', 'KamarController@checkroom')->name('checkroom');

Route::get('/reserve',function(){
    return view('reserve');
})->name('reserve');

Route::get('/payment',function(){
    return view('payment');
})->name('payment');

Route::get('/admin', 'AdminController@index');

Auth::routes();

// Route::get('/react', function() {
//     return view('react.root');
// });

Route::resource('/kamar', 'KamarController');
Route::resource('/memesan', 'MemesanController');
Route::resource('/user', 'UserController');
