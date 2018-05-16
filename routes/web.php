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
Route::get('/fakultet', function () {
    return view('fakultet');
})->name('fakultet');  // imenovana ruta

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');  // imenovana ruta

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
