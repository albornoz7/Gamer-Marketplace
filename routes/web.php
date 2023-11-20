<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PedidosController;
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
    Route::match(['get','post'],'/Categorias', 'categoria')->name('categoria');
    Route::get('/Productos', 'show')->name('ver.productos');
    Route::get('/Lista_Productos', 'index')->name('ver.lista.productos')->middleware('auth');
    Route::get('/Crear_Producto', 'create')->name('crear.producto')->middleware('auth');
    Route::post('/Guardar','store')->name('guardar.producto')->middleware('auth');
    Route::get('/Editar_Producto/{id}', 'edit')->name('editar.producto')->middleware('auth');
    Route::put('/Actualizar/{id}', 'update')->name('actualizar.producto')->middleware('auth');
    Route::delete('/Eliminar_Producto/{id}', 'destroy')->name('eliminar.producto')->middleware('auth');
});

Route::controller(VendedorController::class)->group(function(){
    Route::get('/vendedor', [VendedorController::class, 'view'])->name('vendedor');
    Route::post('/Guardar_vendedor','crearVendedor')->name('guardar_nuevo_vendedor')->middleware('auth');
});


Route::get('/Wiki', [WikiController::class, 'view'])->name('wiki');

Route::post('/agregaritem', [CarritoController::class, 'agregaritem'])->name('agregaritem');

Route::get('/vercarrito', [CarritoController::class, 'vercarrito'])->name('vercarrito');
Route::get('/incrementar/{id}', [CarritoController::class, 'incrementarcantidad'])->name('incrementarcantidad');
Route::get('/diminuir/{id}', [CarritoController::class, 'disminuircantidad'])->name('disminuircantidad');
Route::get('/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('eliminar');
Route::get('/confirmarcarrito', [CarritoController::class, 'confirmarcarrito'])->name('confirmarcarrito');

/* Route::controller(ProductosController::class)->group(function(){
    Route::get('/consolawiki', 'mostrar')->name('#');
    Route::get('/Crear_consola', 'crear')->name('#')->middleware('auth');
    Route::post('/Guardar_consola','guardar')->name('#')->middleware('auth');
    Route::get('/Editar_Producto/{id}', 'editar')->name('#')->middleware('auth');
    Route::put('/Actualizar/{id}', 'actualizar')->name('#')->middleware('auth');
}); */


Route::post('/session', [CarritoController::class, 'session'])->name('session');
Route::get('/success', [CarritoController::class, 'success'])->name('success');
Route::post('/webhook', [CarritoController::class, 'webhook'])->name('webhook');
Route::get('/cancel', [CarritoController::class, 'cancel'])->name('cancel');

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
Route::get('/pedidos/detalles/{id}', [PedidosController::class, 'show'])->name('detalles.pedidos');
Route::get('/pedidos/estado/{id}/{status}', [PedidosController::class, 'updateEstado'])->name('pedido.estado');