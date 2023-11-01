<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function view(){
        return view('vendedor.registro_vendedor');
    }
}
