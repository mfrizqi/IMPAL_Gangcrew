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

Route::middleware('auth')->group(function() {
    Route::get('/reserve', 'MemesanController@reserve')->name('reserve');

    Route::get('/payment', 'MemesanController@payment')->name('payment');

    Route::get('/admin', 'AdminController@index')->middleware('isAdmin')->name('admin');

    Route::resource('/kamar', 'KamarController');
    Route::resource('/memesan', 'MemesanController');
    Route::resource('/user', 'UserController');

    Route::get('/confirmation', 'KamarController@confirmation')->name('confirmation');

    Route::post('/confirm', 'KamarController@confirm')->name('confirm');
});


Route::get('/', 'HomeController@index')->name('home');

Route::get('/room', 'KamarController@index')->name('room');

Route::get('/dining', function () {
    return view('dining');
})->name('dining');

Route::get('/checkroom', 'KamarController@checkroom')->name('checkroom');

Auth::routes();

// Route::get('/react', function() {
//     return view('react.root');
// });
