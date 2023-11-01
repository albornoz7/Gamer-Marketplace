<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\VendedorController;
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
    Route::get('/Lista_Productos', 'index')->name('ver.lista.productos')->middleware('auth');
    Route::get('/Crear_Producto', 'create')->name('crear.producto')->middleware('auth');
    Route::post('/Guardar','store')->name('guardar.producto')->middleware('auth');
    Route::get('/Editar_Producto/{id}', 'edit')->name('editar.producto')->middleware('auth');
    Route::put('/Actualizar/{id}', 'update')->name('actualizar.producto')->middleware('auth');
    Route::delete('/Eliminar_Producto/{id}', 'destroy')->name('eliminar.producto')->middleware('auth');
});



Route::get('/Wiki', [WikiController::class, 'view'])->name('wiki');
Route::get('/vendedor', [VendedorController::class, 'view'])->name('vendedor');
