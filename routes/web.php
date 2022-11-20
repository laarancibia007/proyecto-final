<?php

use App\Http\Controllers\CategoriaController;
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
    return view('welcome');
});
Route::get('/categorias', [CategoriaController::class,'index']);
Route::get('/categorias/crear', [CategoriaController::class,'crear']);
Route::get('/categorias/crear', function () {
    return 'hola desde crear';
});
// Route::get('/categorias/crear', function () {
//     return 'hola desde crear';
// });
Route::get(' /{id}', function () {
    return view('hola desde la modificacion');
});
Route::get('/categorias/del/{id}', function () {
    return 'hola desde la eliminacion';
});
Route::get('/productos', function () {
    return view('hola desde productos');
});
Route::get('/productos/crear', function () {
    return view('hola desde la creacion de productos');
});
Route::get('/productos/mod/{id}', function () {
    return view('hola desde la modificacion de productos');
});
Route::get('/productos/del/{id}', function () {
    return view('hola desde la eliminacion de productos');
});
Route::get('/salidas/crear', function () {
    return view('hola desde las salidas crear');
});
Route::get('/catalogo', function () {
    return view('hola desde catalogo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
