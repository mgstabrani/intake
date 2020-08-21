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

Route::get('/intro', function () {
    return view('welcome');
});
Route::get('/menu', function(){
    return view('home');
});
Route::get('/twibbon', function(){
    return view('twibbon');
});
Route::get('/form2', function(){
    return view('form2');
});
Route::get('/form3', function(){
    return view('form3');
});
Route::post('/menu2', 'FormController@form2');
Route::get('/menu2', 'FormController@form2');

Route::post('/menu3', 'FormController@form3');
Route::get('/menu3', 'FormController@form3');

Route::get('/final', function(){
    return view('gmeet');
});

Route::get('/gform1', function(){
    return view('gform1');
});

Route::get('/gform2', function(){
    return view('gform2');
});

Route::get('/gform3', function(){
    return view('gform3');
});

Route::get('/readme', function(){
    return view('readme');
});