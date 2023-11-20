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
                        
                <div class="relative z-0 w-full mb-6 group">
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="categoria" id="">
                            <option value="PlayStation">Bancolombia</option>
                            <option value="Xbox">Nequi</option>
                            <option value="Nintendo">Efectivo</option>
                            <option value="Perifericos">Pay-Pal</option>
                            
                        </select>
                    </div>
                </div>
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