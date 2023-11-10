<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\productos;

class CarritoController extends Controller
{
    public function agregaritem(Request $request){

        $producto = Productos::find($request->producto_id);

        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'qty' =>1,
            
        ]);
    return redirect()->back();

        
    }
}
