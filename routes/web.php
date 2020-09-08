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
    return view('dashboard');
});

Route::get('/auto', function () {
    return view('auto');
});

Route::get('/autocomplete', function () {
    return view('autocomplete');
});

Route::get('/inisiatif', function () {
    return view('inisiatif.index');
});

Route::get('/inisiatif/upload', function () {
    return view('inisiatif.upload');
});

Route::get('/penugasan1', function () {
    return view('penugasan');
});


Route::get('/upload', function () {
    return view('upload');
});

// Superior


Route::get('/penugasansup', function () {
    return view('atasan.penugasan.index');
});

Route::get('/inisiatifsup', function () {
    return view('atasan.inisiatif.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/edit/{user}', 'HomeController@edit');
Route::patch('/edit/{user}', 'HomeController@update');

Route::get('/targetkinerja', 'SkpsController@index');
Route::get('/targetkinerja/add', 'SkpsController@create');
Route::get('/targetkinerja/dialog', 'SkpsController@dialog');
Route::get('/targetkinerja/edit/{id}', 'SkpsController@edit');
Route::post('/targetkinerja', 'SkpsController@store');


Route::get('/targetkinerjasup', 'SkpsAtasanController@index');
Route::patch('/targetkinerjasup/{skp}', 'SkpsAtasanController@update');

Route::get('/penugasan', 'PenugasansController@index');
Route::get('/penugasan/add', 'PenugasansController@create');
Route::get('/penugasan/upload/{penugasan}', 'PenugasansController@upload');
Route::post('/penugasan', 'PenugasansController@store');
Route::post('/penugasanevidence/{penugasan}', 'PenugasansController@evidencestore');

Route::get('/penugasansup', 'PenugasanAtasansController@index');

