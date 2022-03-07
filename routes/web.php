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
    return view('about');
});

// route page
Route::get('/about', 'PageController@about');
Route::get('/exp', 'PageController@exp');
Route::get('/skill', 'PageController@skill');
Route::get('/sertif', 'PageController@sertif');
Route::get('/contact', 'PageController@contact');
