<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
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
})->middleware('preventBack');

// Rutas de los productos
Route::controller(ProductosController::class)->group(function(){
    Route::get('/categoria/{categoria}', 'categoria')->name('categoria');
    Route::get('/Productos', 'show') ->middleware('auth')->name('ver.productos');
    Route::get('/Lista_Productos', 'index')->name('ver.lista.productos')->middleware('auth');
    Route::get('/Crear_Producto', 'create')->name('crear.producto')->middleware('auth');
    Route::post('/Guardar','store')->name('guardar.producto')->middleware('auth');
    Route::get('/Editar_Producto/{id}', 'edit')->name('editar.producto')->middleware('auth');
    Route::put('/Actualizar/{id}', 'update')->name('actualizar.producto')->middleware('auth');
    Route::delete('/Eliminar_Producto/{id}', 'destroy')->name('eliminar.producto')->middleware('auth');
    Route::post('/habilitar-producto/{id}', 'habilitar')->name('habilitar')->middleware('auth');
    Route::post('/inhabilitar-producto/{id}', 'inhabilitar')->name('inabilitar')->middleware('auth');
})->middleware('preventBack');

Route::controller(VendedorController::class)->group(function(){
    Route::get('/vendedor', [VendedorController::class, 'view'])->name('vendedor')->middleware('auth');;
    Route::post('/Guardar_vendedor','crearVendedor')->name('guardar_nuevo_vendedor')->middleware('auth');
})->middleware('preventBack');


Route::get('/Wiki', [WikiController::class, 'wiki'])->name('wiki');
// Route::get('/admin', [WikiController::class, 'crear'])->name('nconsola')->middleware('auth');
Route::get('/mostrar', [WikiController::class, 'show'])->name('verconsola');
Route::get('/mostrar',[WikiController::class,'mostrarwiki'])->name('mostrar')->middleware('auth');
Route::post('/admin',[WikiController::class, 'store'])->name('nuevaconsola')->middleware('auth');;
Route::get('Wiki/{nombre_consola}', [WikiController::class, 'nombreConsola'])->name('wiki.vista');
Route::get('editar/{id}', [WikiController::class, 'edit'])->name('editarconsola')->middleware('auth');
Route::put('actualizar-wiki/{id}', [WikiController::class, 'update'])->name('actualizarconsola')->middleware('auth');

Route::post('/agregaritem', [CarritoController::class, 'agregaritem'])->name('agregaritem')->middleware('auth');;

Route::get('/vercarrito', [CarritoController::class, 'vercarrito'])->name('vercarrito')->middleware('auth');;
Route::get('/incrementar/{id}', [CarritoController::class, 'incrementarcantidad'])->name('incrementarcantidad')->middleware('auth');;
Route::get('/diminuir/{id}', [CarritoController::class, 'disminuircantidad'])->name('disminuircantidad')->middleware('auth');;
Route::get('/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('eliminar')->middleware('auth');;
Route::get('/eliminarcarrito', [CarritoController::class,'eliminarCarrito'])->name('eliminarcarrito')->middleware('auth');;
Route::get('/confirmarcarrito', [CarritoController::class, 'confirmarcarrito'])->name('confirmarcarrito')->middleware('auth');;

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

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos')->middleware('auth');
Route::get('/detalles/detalles/{id}', [PedidosController::class, 'show'])->name('detalles')->middleware('auth');
Route::get('/pedidos/estado/{id}/{status}', [PedidosController::class, 'updateEstado'])->name('estado')->middleware('auth');
Route::get('estado/pedido/{id}',[PedidosController::class, 'updateEstado'])->name('change.status')->middleware('auth');

Route::get('/verproductos',[AdminController::class,'mostrarProductos'])->name('verproductos')->middleware('auth');
Route::get('/verusuarios',[AdminController::class,'mostrarUsuarios'])->name('verusuarios')->middleware('auth');
Route::delete('/eliminar_usuario/{id}',[AdminController::class,'destruir'])->name('eliminar_usuario')->middleware('auth');


Route::middleware(['preventBack'])->group(function () {    
    Route::get('detallesc/', [PedidosController::class, 'detallesPedidosUsuarios'])->name('detallesc')->middleware('auth');

    // Crud usuario 
    
Route::get('/configuracion/perfil/{id}', [UsuarioController::class, 'index'])->name('usuario.configuracion');
Route::get('/configuracion/perfil/{id}', [UsuarioController::class, 'edit'])->name('actualizado1');
Route::put('/configuracion/perfil/{id}',  [UsuarioController::class, 'update'])->name('actualizado');
Route::post('/configuracion/perfil/{id}',  [UsuarioController::class, 'updatePassword'])->name('contra');

});


