<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

// Rutas de los productos
Route::controller(ProductosController::class)->group(function(){
    Route::post('/Categorias', 'categoria')->name('categoria');
    Route::get('/Productos', 'show')->name('ver.productos');
    Route::get('/Lista_Productos', 'index')->name('ver.lista.productos');
    Route::get('/Crear_Producto', 'create')->name('crear.producto');
    Route::post('/Guardar','store')->name('guardar.producto');
    Route::get('/Editar_Producto/{id}', 'edit')->name('editar.producto');
    Route::put('/Actualizar/{id}', 'update')->name('actualizar.producto');
    Route::delete('/Eliminar_Producto/{id}', 'destroy')->name('eliminar.producto');
});


