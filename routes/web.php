<?php

// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Http;



//revisar en fotos se quito un use y lo mando a api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SalidaController;
// use App\Models\Categoria;


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



// Route::get('/catalogo', [App\Http\Controller\PrincipalController::class,'catalogo']);



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/categorias', [CategoriaController::class,'index']);
    Route::get('/categorias/crear', [CategoriaController::class,'crear']);
    Route::post('/categorias/crear', [CategoriaController::class,'postcrear']);
    Route::get('/categorias/mod/{id}', [CategoriaController::class,'mod']);
    Route::put('/categorias/mod/{id}', [CategoriaController::class,'postmod']);
    Route::get('/categorias/del/{id}', [CategoriaController::class,'del']);

    Route::get('/productos', [ProductoController::class,'index']);
    Route::get('/productos/crear', [ProductoController::class,'crear']);
    Route::post('/productos/crear', [ProductoController::class,'postcrear']);
    Route::get('/productos/mod/{id}', [ProductoController::class,'mod']);
    Route::put('/productos/mod/{id}', [ProductoController::class,'postmod']);
    Route::get('/productos/del/{id}', [ProductoController::class,'del']);


});

Route::get('/principal/index', [PrincipalController::class,'index']);
Route::get('/principal/nosotros', [PrincipalController::class,'nosotros']);
Route::get('/principal/catalogo', [PrincipalController::class,'catalogo']);
Route::get('/principal/index_usuarios', [PrincipalController::class,'index_usuarios']);

Route::get('/principal/contacto', [ContactoController::class, 'crear']);
Route::post('/principal/contact', [ContactoController::class, 'postcrear'])->name('contacto.store');

Route::get('/catalogo', [CatalogoController::class,'index']);

Route::get('/salidas', [SalidaController::class,'index']);
Route::post('/salidas', [SalidaController::class,'guardar']);
// Route::get('/principal/contactos', [PrincipalController::class,'contactos']);



// Route::get('/categorias/crear', function () {
//     return 'hola desde crear';
// });


// Route::get('/productos/del/{id}', function () {
//     return view('hola desde la eliminacion de productos');
// });
Route::get('/salidas/crear', function () {
    return view('hola desde las salidas crear');
});






Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
