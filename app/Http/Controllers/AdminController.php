<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\pedidos;
use App\Models\vendedor;
use App\Models\productos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function mostrarUsuarios()
{
    $usuarios = User::all();
    return view('admin.verusuarios', compact('usuarios'));
}

public function destruir($id)
{
    $usuario = User::find($id);
    $usuario->delete();
    return redirect()->back();
}

public function mostrarProductos()
{
    $verproductos = productos::all();
    return view('admin.productos', compact('verproductos'));
}



}