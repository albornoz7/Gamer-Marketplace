    @extends('Layouts.layout')
    @section('content')
    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="bg-blue-400 absolute top-0 left-0 bg-gradient-to-b from-gray-900 via-gray-900 to-purple-blue bottom-0 leading-5 h-full w-full overflow-hidden">
        
    </div>
    <div
        class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">

        <div class="flex justify-center self-center  z-10">
            <div class="p-12 bg-white mx-auto rounded-3xl w-96 ">
                <div class="mb-7">
                    <h3 class="font-semibold text-2xl text-gray-800">Nuevo Vendedor</h3>
                    
                </div>
                <form action="{{route('guardar_nuevo_vendedor')}}" method="POST">
                    @csrf
                <div class="space-y-6">
                    {{-- <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text"  placeholder="Nombre">
                </div> --}}
                <div class="space-y-6">
                    {{-- <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text"  placeholder="Correo">
                </div> --}}
                <div class="space-y-6">
                    <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text" name="celular" placeholder="Celular">
                </div>
                <div class="space-y-6">
                    <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text" name="direccion" placeholder="Direccion">
                </div>

                        <div class="flex items-center justify-center space-x-2 my-5">
                            <span class="h-px w-16 bg-gray-100"></span>
                            <span class="text-black-300 font-normal">Metodos de pago</span>
                            <span class="h-px w-16 bg-gray-100"></span>
                        </div>
                        <div class="flex justify-center gap-5 w-full ">

                            <button type="submit" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-blue-300 hover:border-blue-400 hover:bg-blue-400 text-sm text-gray-500 p-3  rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500">
                    <!-- <svg class="w-4" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05 0 5.71-3.83 9.77-9.6 9.77-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01Z"></path></svg> -->
                <span>Bancolombia</span>
                </button>

                <button type="submit" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-blue-300 hover:border-blue-400 hover:bg-blue-400 text-sm text-gray-500 p-3  rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500">
                    <!-- <svg class="w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" fill-rule="evenodd" d="M9.945 22v-8.834H7V9.485h2.945V6.54c0-3.043 1.926-4.54 4.64-4.54 1.3 0 2.418.097 2.744.14v3.18h-1.883c-1.476 0-1.82.703-1.82 1.732v2.433h3.68l-.736 3.68h-2.944L13.685 22"></path></svg> -->
                <span>Nequi</span>
                </button>

                <button type="submit" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-blue-300 hover:border-blue-400 hover:bg-blue-400 text-sm text-gray-500 p-3  rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500">
                <!-- <svg class="w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" fill-rule="evenodd" d="M9.945 22v-8.834H7V9.485h2.945V6.54c0-3.043 1.926-4.54 4.64-4.54 1.3 0 2.418.097 2.744.14v3.18h-1.883c-1.476 0-1.82.703-1.82 1.732v2.433h3.68l-.736 3.68h-2.944L13.685 22"></path></svg> -->
                <span>Efectivo</span>
                </button>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center bg-purple-800  hover:bg-purple-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                    Sign in
                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    @endsection