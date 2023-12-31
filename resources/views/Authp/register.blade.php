@extends('Layouts.layout')

@section('content')

    <form  action="{{ route('store') }}" method="post" class="mt-20">
        @csrf
        <div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-Gray-200 border-0">
        <div class="mb-4">
        <label for="name" class="block mb-2 text-sm text-gray-600">Nombre y apellido</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
        <label for="email" class="block mb-2 text-sm text-gray-600">Correo electrónico</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
        </div>
        <div class="mb-4">
        <label for="password" class="block mb-2 text-sm text-gray-600">Contraseña</label>
        <input type="password"   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 @error('password') is-invalid @enderror" id="password" name="password" required>
        @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
        </div>
        <div class="mb-6">
        <label for="password_confirmation" class="block mb-2 text-sm text-gray-600">Repetir contraseña</label>
        <input type="password"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" id="password_confirmation" name="password_confirmation" required>
        

            
    </div>
        <button type="submit" class="bg-blue-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">Registro</button>
        
    </form>
    <div class="text-center">
        <p class="text-sm">¿Ya tienes una cuenta? <a href="{{route('login')}}" class="text-cyan-600">Inicia sesión</a></p>
    </div>
    
    </div>

@endsection