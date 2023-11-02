<?php

namespace App\Http\Controllers;

use App\Models\vendedor;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class VendedorController extends Controller
{
    public function view(){
        return view('vendedor.registro_vendedor');
    }

    public function create()
    {
        return view('ver.lista.productos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function crearVendedor(Request $request): RedirectResponse
    {
        $request->validate([
        'celular'=>'required',
        'direccion'=>'required',
        
        ]);

        $celular = $request->input('celular');
        $direccion = $request->input('direccion');
        $user_id = Auth::id();

        $vendedor = new vendedor();
        $vendedor->celular = $celular;
        $vendedor->direccion = $direccion;
        $vendedor->user_id = $user_id;
        $vendedor->save();

        $usuarios = User::all()->where('id' , $user_id);
        foreach ($usuarios as $usuario) {
            $usuario->rol_id = 2; // Actualiza el valor de rol_id a 2
            $usuario->save(); // Guarda los cambios en la base de datos
        }
        
        return redirect()->route('ver.productos');
    
    }
    
}

