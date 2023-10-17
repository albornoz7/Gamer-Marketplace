<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WikiController extends Controller
{
    public function view(){
        return view('wiki.wiki');
    }
}
