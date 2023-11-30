<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesPedidos;
use App\Models\pedidos;
use Gloudemans\Shoppingcart\Cart;
use App\Models\User;
use App\Models\productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id(); // Obtener el ID del usuario autenticado
    
        $pedidos = DetallesPedidos::with('productos', 'pedidos')
            ->whereHas('productos', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->paginate(5);
    
        return view('productos.detalles.pedidos', compact('pedidos'));
    }

    public function show(Request $request, $id)
    {

        $pedido = DetallesPedidos::findOrFail($id)
            ->with('productos', 'user')->where('id', $id)->get();


        return view('productos.detalles.detalles', compact('pedido'));
    }
    

    public function updateEstado($id)
    {
        $pedido = pedidos::find($id);
        if ($pedido->status == 'PAGADO'){
            DB::table('pedidos')->where('id',$id)->update(['status'=>'PENDIENTE']);
            return redirect()->back();
        } else {
            DB::table('pedidos')->where('id',$id)->update(['status'=>'PAGADO']);
            return redirect()->back();
        }
    }
    public function detallesPedidosUsuarios(Request $request)
    {
        $userId = Auth::id(); // Obtener el ID del usuario autenticado
        //$pedidos = DetallesPedidos::with('productos', 'pedidos');
        $pedidos = DetallesPedidos::with(['productos', 'pedidos'])
        ->whereHas('pedidos', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })
        ->paginate(5);
        return view('productos.detalles.detallesC', compact('pedidos'));
    }

}
