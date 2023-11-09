<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use App\Http\Controllers\ProductosController;

class CarritoController extends Controller
{
    public function agregaritem(Resquest $resquest){
        $producto = ProductosController::find($resquest->producto_id);
        card::add({
            'id'=> $producto->id,
            'name'
        })
    }
}
