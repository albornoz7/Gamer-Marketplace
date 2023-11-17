<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\productos;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Auth;


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
    // public function confirmarcarrito(){
        
    // }
    public function session()
    {

        $productItems = [];
        $user         = auth()->user();
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        foreach (Cart::content() as $item) {
            $product_name =  $item->name;
            $total = $item->price;
            $quantity = $item->qty;
            $two = "00";
            $unit_amount = "$total$two";
            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    
                    ],
                    'currency' => 'COP',
                    'unit_amount' => $unit_amount,
                ],
                'quantity' => $quantity

            ];
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
			'line_items' => [$productItems],
			'metadata' => [
				'user_id' => $user->id,
			],
			'customer_email' => $user->email,
			'mode' => 'payment',
			'success_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
			'cancel_url' => route('cancel'),
		]);

   
        return redirect()->away($checkoutSession->url);
    }
    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $sessionId = $request->get('session_id');

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                dd('session var no encontrada');
                throw new NotFoundHttpException;
            }
        } catch (\Throwable $th) {
            throw new NotFoundHttpException();
            dd('error en try');
        }
        return redirect()->route('ver.productos')->with('success', 'success');
    }
    public function cancel()
    {
        return redirect()->back()->with("canceled", "cancelado");
    }


}



