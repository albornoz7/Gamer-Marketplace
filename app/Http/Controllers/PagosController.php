<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function checkout(){
        return view('Productos.checkout');
    }
}
