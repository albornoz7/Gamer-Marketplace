<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\consolawiki;

class ConsolawikiController extends Controller
{
    public function crear()
    {
        return view('#');
    }
    public function guardar(Request $request):RedirectResponse{
        $request->validate([
        'nombre_consola'=>'required',
        'descripcion_consola'=>'required',
        ]);
        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('imagen'), $imageName);
        // $user_id = Auth::id();
        
        Consolawiki::crear([
            'nombre_consola' => $request->input('nombre_consola'),
            'descripcion_consola' => $request->input('descripcion_consola'),
            'foto'=> 'imagen/' . $imageName,

        ]);
        return redirect()->route('#');
    }
    public function show(consolawiki $wiki)
    {
        $productos = consolawiki::all(); // Recuperar todos los registros de la tabla 'productos'
        return view('#', compact('#'));
    }

    public function editar($id)
    {
        $productos = consolawiki::find($id);
        return view('#', compact('#'));
    }

    public function actualizar(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $wiki = consolawiki::find($id);

    
    if ($wiki->foto) {
        $rutaFotoAnterior = public_path($wiki->foto);
        if (file_exists($rutaFotoAnterior)) {
            unlink($rutaFotoAnterior);
        }
    }

    $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
    $request->file('foto')->move(public_path('imagen'), $imageName);
    $wiki->foto = 'imagen/' . $imageName;

    
    $wiki->nombre = $request->input('nombre');
    $wiki->descripcion = $request->input('descripcion');
    $wiki->save();

    return redirect()->route('#');
}

}
