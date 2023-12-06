@extends('Layouts.layout')

@section('content')
    
    <form action="{{ route('authenticate') }}" method="post">
        @csrf

        <section class="bg-blueGray-50">
            <div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center mb-3">
                    <hr class="mt-6 border-b-1 border-blueGray-300">
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div class="text-black-400 text-center mb-3 font-bold">
                    <small>Iniciar Sesion</small>
                    </div>
                    <form>
                    <div class="relative w-full mb-3">
                        <label  for="email"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Email</label>
                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="relative w-full mb-3">
                        <label for="password" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Password</label>
                        <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('password') is-invalid @enderror " placeholder="Password" id="password" name="password">
                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                    </div>
                    <div>
                        <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox" class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"><span class="ml-2 text-sm font-semibold text-blueGray-600">Remember me</span></label>
                    </div>
                    <div class="text-center mt-6">
                        <button class="bg-blue-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit" value="Login"> Sign In </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </section>
    </form>

    <!-- component -->
    <form action="{{ route('authenticate') }}" method="post">
        <div class="">
            <div class="relative min-h-screen  grid bg-black ">
            <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
                <div  class="relative sm:w-1/2 xl:w-3/5 bg-blue-500 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover relative" style="background-image: url(https://i.postimg.cc/mrgPMqpP/logo.png);">
                <div class="absolute bg-black  opacity-25 inset-0 z-0"></div>
                <div class="w-full  lg:max-w-2xl md:max-w-md z-10 items-center text-center ">
                    <div class=" font-bold leading-tight mb-6 mx-auto w-full content-center items-center ">
                
                    </div>
                </div>
                </div>

                <div class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none ">
                    <div class="max-w-xl w-full space-y-12">
                        <div class="lg:text-left text-center">
                            <div class="flex items-center justify-center ">
                            <div class="bg-black flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
                            
                            <form [formGroup]="createaccount" class="flex flex-col space-y-8 mt-10"  action="{{ route('authenticate') }}" method="post">
                                @csrf
                            <label class="font-bold text-lg text-white " >Ingrese Correo Electronico</label> 
                            <input type="text" formControlName="accnum" placeholder="Email" id="email" name="email" value="{{ old('email') }}" class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white  @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" >
                            @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            <label class="font-bold text-lg text-white">Ingrese Contraseña</label> 
                            <input type="password" formControlName="pin" placeholder="****" class="border rounded-lg py-3 px-3 bg-black border-indigo-600 placeholder-white-500 text-white ">
                            <label for="">iniciar sesion</label>
                                <button (click)="onSubmit()" class="border border-indigo-600 bg-black text-white rounded-lg py-3 font-semibold" routerLink="/dashboard">Create Account</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection