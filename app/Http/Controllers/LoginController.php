<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /** 
     * Instantiate a new LoginRegisterController instance. 
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', '/'
        ]);
        $this->middleware('auth')->only('/');
    }
    /** 
     * Display a registration form. 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register()
    {
        return view('Authp.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => 1
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')
            ->withSuccess('You have successfully registered & logged in!');
    }
    public function login()
    {
        return view('Authp.login');
    }
    // public function authenticate(Request $request) 
    // { 
    //     $credentials = $request->validate([ 
    //         'email' => 'required|email', 
    //         'password' => 'required' 
    //     ]); 
    //     if(Auth::attempt($credentials)) 
    //     { 
    //         $request->session()->regenerate(); 
    //         return redirect()->route('ver.productos') 
    //             ->withSuccess('You have successfully logged in!'); 
    //     } 
    //     return back()->withErrors([ 
    //         'email' => 'Your provided credentials do not match in our records.', 
    //     ])->onlyInput('email'); 
    // }  
    // public function dashboard() 
    // { 
    //     if(Auth::check()) 
    //     { 
    //         return view('ver.productos'); 
    //     } 
    //     return redirect()->route('login') 
    //         ->withErrors([ 
    //         'email' => 'Please login to access the dashboard.', 
    //     ])->onlyInput('email'); 
    // }  
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Obtener el usuario autenticado 
            $user = Auth::user();
            $rol_id = Auth::user();
            // Redireccionar según el ID del usuario 
            if ($rol_id->id == 1) {
                return redirect()->route('ver.productos')
                    ->withSuccess('Has iniciado sesión exitosamente como vendedor');
            } else {
                return redirect()->route('ver.productos')
                    ->withSuccess('Has iniciado sesión exitosamente como otro tipo de usuario');
            }
        }
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('ver.productos')
            ->withSuccess('You have logged out successfully!');;
    }
}
