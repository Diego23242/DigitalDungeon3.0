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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/*Rutas de categorias*/
Route::view('/categorias', 'categorias')->name('categorias');
Route::view('/categoriaccion', 'accion')->name('accion');
Route::view('/categoriaventura', 'aventura')->name('aventura');
Route::view('/categoricarro', 'carros')->name('carros');
Route::view('/categoriaestrategia', 'estrategia')->name('estrategia');
Route::view('/categoriaplataformas', 'plataformas')->name('plataformas');
Route::view('/categoriaretro', 'retro')->name('retro');
Route::view('/categoriasimulacion', 'simulacion')->name('simulacion');
Route::view('/categoriaterror', 'terror')->name('terror');
Route::view('/inicio', 'index')->name('inicio');


/* Rutas plataformas de videojuegos*/
Route::view('/vplataformas', 'vplataformas')->name('vplataformas');
Route::view('/playstation', 'playstation')->name('playstation');
Route::view('/xbox', 'xbox')->name('xbox');

/*Ruta ofertas */
Route::view('/ofertas', 'ofertas')->name('ofertas');

/*Rutas Accesorios */
Route::view('/accesorios', 'accesorios')->name('accesorios');
Route::view('/mandos', 'mandos')->name('mandos');
Route::view('/audifonos', 'audifonos')->name('audifonos');

/*Rutas formularios */
/*Vistas*/
Route::view('/comentario', 'comentario')->name('comentarios');

Route::view('/register', 'auth.register')->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');



});
