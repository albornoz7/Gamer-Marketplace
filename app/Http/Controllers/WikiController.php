<?php

namespace App\Http\Controllers;

use App\Models\consolawiki;
use Illuminate\Http\RedirectResponse;
use App\Events\NewProductsEvent;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WikiController extends Controller
{


    

    public function nombreConsola($nombre_consola) {
        // Obtener productos por categoría
        $nombre_consola = consolawiki::where('nombre_consola', $nombre_consola)->get(); // Filtrar por categoría

        return view('wiki.wiki', ['consolas' => $nombre_consola]); // Pasar los productos a tu vista
    }

    public function wiki(){
        return view('wiki.wikiInicio');
    }

    public function crear()
    {
        return view('admin.crear');
    }
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'nombre_consola' => 'required',
            'descripcion_consola' => 'required',
            'foto' => 'required',
        ]);

        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('fotos'), $imageName);


        consolawiki::create([
            'nombre_consola' => $request->input('nombre_consola'),
            'descripcion_consola' => $request->input('descripcion_consola'),
            'foto' => 'fotos/' . $imageName,

        ]);
        return redirect()->route('nconsola');
    }
    public function show(consolawiki $consolawiki)
    {
        // Recuperar todos los registros de la tabla 'productos'
        return view('admin.mostrar');
    }
    public function edit($id)
    {
        $consolawiki = consolawiki::find($id);
        return view('admin.editar', compact('consolawiki'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion_consola' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $consolawiki = consolawiki::find($id);
    
        // Eliminar foto anterior si existe
        if ($consolawiki->foto) {
            $rutaFotoAnterior = public_path($consolawiki->foto);
            if (file_exists($rutaFotoAnterior)) {
                unlink($rutaFotoAnterior);
            }
        }
    
        // Mover y guardar la nueva foto
        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('fotos'), $imageName);
        $consolawiki->foto = 'fotos/' . $imageName;
    
        // Actualizar los demás campos del producto
        $consolawiki->descripcion_consola = $request->input('descripcion_consola');
        $consolawiki->save();
    
        return redirect()->route('wiki.vista');
    }
    public function mostrarwiki()
    {
        $user_id = Auth()->user()->id;
        $consolawiki = consolawiki::all(); // Recuperar todos los registros de la tabla 'productos'
        // dd(consolawiki::all());
        
        return view('admin.mostrar', compact('consolawiki')); // Pasar los datos a la vista
    }


}
