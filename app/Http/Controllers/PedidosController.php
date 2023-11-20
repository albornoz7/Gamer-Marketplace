<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesPedidos;

class PedidosController extends Controller
{
    public function index(Request $request)
    {

        $pedidos = DetallesPedidos::with('productos', 'pedidos')->paginate(10);
        return view('productos.detalles.pedidos', compact('pedidos'));
    }

    public function show(Request $request, $id)
    {

        $pedido = DetallesPedidos::findOrFail($id)
            ->with('productos', 'user')->where('id', $id)->get();


        return view('productos.detalles.detalles', compact('pedido'));
    }

    public function updateEstado($id, $status)
    {
        $pedidos = DetallesPedidos::findOrFail($id);
        $pedidos->estado = $status;
        $pedidos->save();

        /*         self::ordenStatusMakeNotification($orden);
 */
        return response()->json(['success' => true]);
    }
}
