<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>GAMERS MARKETPLACE</title>

    <!-- Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

    
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/mensajes_error.css')}}">


</head>

<body>
    @section('sidebar')
        <nav class="bg-white border-gray-200 dark:bg-gray-900">

            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('ver.productos')}}" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gamers Marketplace</span>
            </a>
        
            <!-- boton Carrito-->
                @auth
                @if (Cart::content()->count())
                <div class="flex items-center md:order-2">
                    <button  data-popover-target="popover-click" data-popover-trigger="click">
                    <!-- component -->
                    <div class="relative py-2">
                        <div class="t-0 absolute left-3">
                            <p class="flex h-2 w-2 items-center justify-center rounded-full bg-red-500 p-3 text-xs text-white">{{Cart::content()->count()}}</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: mt-4 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                </button>
                <div data-popover id="popover-click" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                    @if (count(Cart::content()))
                    <div  class="relative overflow-x-auto w-72">
                        
                        <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                                        Nombre del Producto
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Cantidad 
                                    </th>
                                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                                        Precio
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $item)
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->name }}
                                    </th>
                                            <td class="px-6 py-4">{{ $item->qty}} </td>
                                            <td class="px-6 py-4">{{ number_format($item->qty * $item->price, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="font-semibold text-gray-900 dark:text-white">
                                    <td class="px-6 py-3"></td>
                                    <td class="px-6 py-3"></td>
                                    <th scope="row" class="px-6 py-3 text-base">Total: {{ Cart::total() }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        @endif
                    </div>
                    <div data-popper-arrow></div>
                </div>
                
                </div>
                @endif

                @endauth
                
                <!-- Login si no esta registrado y Perfil si inicio sesion -->
                @auth
                <div class="flex items-center md:order-2">
                    <button type="button" class="flex mr-3 text-sm" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    </button>
                    
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white"> {{ Auth::user()->name }}</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"> {{ Auth::user()->email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                @if(Auth::check())
                                @if(Auth::user()->rol_id == 1)
                                    <a href="{{ route('vendedor') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Vendedor</a>
                                @else
                                    <a href="{{ route('crear.producto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Vender</a>
                                @endif
                            @endif
                            </li>
                            <li>
                                @if(Auth::check())
                                @if(Auth::user()->rol_id == 1)
                                    <a href="{{ route('vendedor') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Vendedor</a>
                                @else
                                <a href="{{route('ver.lista.productos')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Productos</a>                                @endif
                            @endif
                            </li>
                            
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Cerrar Sesion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </div>
                </div>
                @endauth
                @guest
                    <div class="flex items-center md:order-2">
                        <a {{ (request()->is('login')) ? 'active' : '' }} href="{{ route('login') }}"  class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-red-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                            Iniciar sesion
                        </a>
                        <a {{ (request()->is('register')) ? 'active' : '' }} href="{{ route('register') }}" class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-red-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                            Registrarme
                        </a>  
                    </div>
                @endguest
                
                <!-- Categorias -->
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <form action="{{ route('categoria')}}" method="post">
                        @csrf
                        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                            <a href="{{ route('wiki')}}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-700 md:p-0 md:dark:text-blue-500" aria-current="page">WIKI GAMER</a>
                            </li>
                            <li>
                                <button type="submit" name="categoria" value="play">
                                <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PLAYSTATION</a>
                            </button>
                            </li>
                            <li>
                                <button type="submit" name="categoria" value="xbox">
                                <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">XBOX</a>
                                </button>
                            </li>
                            <li>
                                <button type="submit" name="categoria" value="nintendo" >            
                                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">NINTENDO</a>
                                </button>
                            </li>
                            <li>
                                <button type="submit" name="categoria" value="perifericos">
                                <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PERIFERICOS</a>
                                </button>
                            </li>
                            <li>
                                <button type="submit" name="categoria" value="otros">
                                <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">OTROS</a>
                                </button>
                            </li>
                            </form>
                        </ul>
                </div>
        </nav>
    @show

    <div class="container">
        @yield('content')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>



</html>

