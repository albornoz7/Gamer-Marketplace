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
            'weight'=>1,
            'description'=>$producto->descripcion,
            'options'=>[
                'foto'=>$producto->foto,
                'nombre'=> null,



            ]
            
        ]);
    return redirect()->back()->with("success","$producto->nombre !Se ha agregado un Nuevo Producto");

        
    }
    
    public function vercarrito(){
        return view('Productos.vercarrito');
    }
    

    public function incrementarcantidad(Request $request){

        $item = Cart::content()->where("rowId",$request->id)->first();
        Cart::update($request->id,["qty" => $item->qty+1 ]);

        return back()->with("success","Se agrego una unidad mas");


    }
    public function disminuircantidad(Request $request){

        $item = Cart::content()->where("rowId",$request->id)->first();
        Cart::update($request->id,["qty" => $item->qty-1 ]);

        return back()->with("success","se quito un producto");
    }
    public function eliminar(Request $request){
        Cart::remove($request->id);
        return back()->with("success","Producto eliminado");
    }
    public function confirmarcarrito(){
        
    }

}
