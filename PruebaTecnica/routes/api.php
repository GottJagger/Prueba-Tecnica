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



Route::get('/productos', 'App\Http\Controllers\ProductosController@index'); //mostrar todos los productos
Route::get('/productos/{id}', 'App\Http\Controllers\ProductosController@show'); //mostrar un producto por id

Route::post('/compras', 'App\Http\Controllers\ComprasController@store'); //guardar una compra



