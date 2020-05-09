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

Use App\Labs;
 
Route::get('labs', 'LabsController@index');
 
Route::get('labs/{lab}', 'LabsController@show');


Route::post('labs', 'Labcontroller@store');

Route::put('labs/{lab}', 'LabsContronller@update');

Route::delete('labs/{lab}', 'LabsController@delete');