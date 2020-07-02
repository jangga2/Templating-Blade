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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/register', function () {
//     return view('form');
// });

Route::get('/', function () {
    return view('adminlte.contents.progress');
});

// Route::get('/register', 'RegisterController@form');

// Route::get('/sapa', 'RegisterController@sapa');

// Route::post('/sapa', 'RegisterController@sapa_post');

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/data-tables', function () {
    return view('adminlte.contents.datatables');
});