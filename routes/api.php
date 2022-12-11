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

// prueba para ver los apis de mis productos
// esto permite ver mis apis de las lista de productos desde otro framework
// Route::get('/productos', function () {
//     return ('lista de productos');
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
