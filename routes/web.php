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
    return view('homee');
})->name('home');

Route::get('/room', function () {
    return view('room');
})->name('room');

Route::get('/dining', function () {
    return view('dining');
})->name('dining');

Route::get('/checkroom', function () {
    return view('checkroom');
});


Auth::routes();

Route::get('/react', function() {
    return view('react.root');
});
