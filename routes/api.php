<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Bawahan
Route::get('skps', 'Api\SkpsController@index');
Route::get('skp/{skp}', 'Api\SkpsController@show');
Route::post('skp', 'Api\SkpsController@store');
Route::put('skp/', 'Api\SkpsController@update');
Route::delete('skp/{skp}', 'Api\SkpsController@destroy');