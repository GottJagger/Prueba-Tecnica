<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/productos', 'App\Http\Controllers\ProductosController@index'); //mostrar todos los productos
Route::post('/productos', 'App\Http\Controllers\ProductosController@store'); //crear un producto
Route::put('/productos{id}', 'App\Http\Controllers\ProductosController@update'); //crear un producto
Route::delete('/productos{id}', 'App\Http\Controllers\ProductosController@destroy'); //crear un producto
