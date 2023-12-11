    @extends('Layouts.layout')
    @section('content')
    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-Gray-200 border-0">
        
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
                <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-white-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div class="space-y-6">
                    <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-white-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text"  value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="space-y-6">
                    <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-white-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text" name="celular" placeholder="Celular">
                </div>
                <div class="space-y-6">
                    <div class="">
                        <input class=" w-full text-sm  px-4 py-3 bg-white-200 focus:bg-black-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400" type="text" name="direccion" placeholder="Direccion">
                </div>

                        <div class="flex items-center justify-center space-x-2 my-5">
                            <span class="h-px w-16 bg-gray-100"></span>
                            <span class="text-black-300 font-normal">Metodos de pago</span>
                            <span class="h-px w-16 bg-gray-100"></span>
                        </div>
                        

                <div class="max-w-2xl mx-auto">

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Seleciona el metodo de pago</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>.............</option>
                        <option value="bancolombia">Bancolombia</option>
                        <option value="nequi">Nequi</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="paypal">Pay-Pal</option>
                    </select>
                

                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
            </div>

                        <div>
                            <button type="submit" class="bg-blue-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                    Actualizar Perfil
                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    @endsection