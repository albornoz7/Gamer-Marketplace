<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\View\View;
// use Livewire\Features\SupportRedirects\Redirector;
// use Illuminate\Database\Eloquent\Model\update;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function categoria(Request $request) {

        // Obtener todas las categositas
        $categoria = $request->input('categoria');
        switch ($categoria) {
            case 'play':
                $productos = Productos::where('categoria', 'PlayStation')->where('status', 'Habilitado')->get();
                // Mostrar los productos encontrados
                return view('productos.categorias', compact('productos'));
                break;
            case 'xbox':
                    $productos = Productos::where('categoria', 'Xbox')->where('status', 'Habilitado')->get();
                    // Mostrar los productos encontrados
                    return view('productos.categorias', compact('productos'));
                break;
            case 'nintendo':
                $productos = Productos::where('categoria', 'Nintendo')->where('status', 'Habilitado')->get();
                // Mostrar los productos encontrados
                return view('productos.categorias', compact('productos'));
                break;
            case 'perifericos':
                    $productos = Productos::where('categoria', 'Perifericos')->where('status', 'Habilitado')->get();
                    // Mostrar los productos encontrados
                    return view('productos.categorias', compact('productos'));
                break;
            case 'otros':
                    $productos = Productos::where('categoria', 'Otros')->where('status', 'Habilitado')->get();

                    // Mostrar los productos encontrados
                    return view('productos.categorias', compact('productos'));
                break;
            default:
                $productos = productos::all(); // Recuperar todos los registros de la tabla 'productos'
                return view('productos.categorias', compact('productos'));
                break;
        }
        // Mostrar los productos encontrados
        

        
    }

    public function wiki(){
        return view('wiki.enciclo');
    }

    public function index()
    {
        $user_id = Auth()->user()->id;
        $productos = productos::where('user_id', $user_id)->paginate(5); // Recuperar todos los registros de la tabla 'productos'
        return view('Productos.Crud.ver', compact('productos')); // Pasar los datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.Crud.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'cantidad'=>'required',
            'precio'=>'required',
            'status'=>'required',
            'due_date'=>'required', 
            'categoria'=>'required',
        ]);

        

        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('fotos'), $imageName);
        $user_id = Auth::id();

        productos::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
            'status' => $request->input('status'),
            'categoria' => $request->input('categoria'),
            'due_date' => date('Y-m-d'),
            'foto'=> 'fotos/' . $imageName,
            'user_id' => $user_id,
        ]);

        return redirect()->route('ver.lista.productos');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {   
        $user_id = Auth::id();

        $productos = productos::where('user_id', "!=", $user_id)->where('status', 'Habilitado')->get(); // Recuperar todos los registros de la tabla 'productos'
        return view('productos.categorias', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productos = productos::find($id);
        return view('Productos.Crud.editar', compact('productos'));
    }

    
    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'cantidad' => 'required',
        'precio' => 'required',
        'status' => 'required',
        'due_date' => 'required',
        'categoria' => 'required',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $producto = productos::find($id);

    // Eliminar foto anterior si existe
    if ($producto->foto) {
        $rutaFotoAnterior = public_path($producto->foto);
        if (file_exists($rutaFotoAnterior)) {
            unlink($rutaFotoAnterior);
        }
    }

    // Mover y guardar la nueva foto
    $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
    $request->file('foto')->move(public_path('fotos'), $imageName);
    $producto->foto = 'fotos/' . $imageName;

    // Actualizar los demás campos del producto
    $producto->nombre = $request->input('nombre');
    $producto->descripcion = $request->input('descripcion');
    $producto->cantidad = $request->input('cantidad');
    $producto->precio = $request->input('precio');
    $producto->status = $request->input('status');
    $producto->due_date = $request->input('due_date');
    $producto->categoria = $request->input('categoria');
    $producto->save();

    return redirect()->route('ver.lista.productos');
}

public function destroy($id){
    $producto = productos::find($id);
    $foto = $producto->foto; // Obtén el nombre de la foto antes de eliminar el producto
    $mensaje = 'Producto eliminado con éxito';
    $producto->status = "Inhabilitado";
    $producto->save();
    return redirect()->back()->with('mensaje', $mensaje);
}
public function habilitar($id){
    $producto = productos::find($id);
    $producto->status = "Habilitado";
    $producto->save();
    return redirect()->back()->with('mensaje', 'Producto habilitado con éxito');


}

public function inhabilitar($id){
    $producto = productos::find($id);
    $producto->status = "Inhabilitado";
    $producto->save();
    return redirect()->back()->with('mensaje', 'Producto inhabilitado con éxito');
}
}

//     public function obtenerProductosUsuario()
//     {
//         $user = Auth::user(); // Obtener el usuario autenticado
//         $productos = $user->productos; // Obtener los productos del usuario
    
//         // Aquí puedes realizar cualquier acción con los productos del usuario
    
//         return view('ver.productos', ['productos' => $productos]);
//     }
// }
