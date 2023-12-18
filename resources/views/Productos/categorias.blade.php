@extends('Layouts.layout')

@section('content')
    <!-- Tab Menu -->
    <div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center bg-white text-gray-800">
        <!-- Agrega atributos data-categoria con el nombre de la categoría a cada enlace -->
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'todos']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Todos</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'playstation']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-sony-playstation" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M9.5,4.27C10.88,4.53 12.9,5.14 14,5.5C16.75,6.45 17.69,7.63 17.69,10.29C17.69,12.89 16.09,13.87 14.05,12.89V8.05C14.05,7.5 13.95,6.97 13.41,6.82C13,6.69 12.76,7.07 12.76,7.63V19.73L9.5,18.69V4.27M13.37,17.62L18.62,15.75C19.22,15.54 19.31,15.24 18.83,15.08C18.34,14.92 17.47,14.97 16.87,15.18L13.37,16.41V14.45L13.58,14.38C13.58,14.38 14.59,14 16,13.87C17.43,13.71 19.17,13.89 20.53,14.4C22.07,14.89 22.25,15.61 21.86,16.1C21.46,16.6 20.5,16.95 20.5,16.95L13.37,19.5V17.62M3.5,17.42C1.93,17 1.66,16.05 2.38,15.5C3.05,15 4.18,14.65 4.18,14.65L8.86,13V14.88L5.5,16.09C4.9,16.3 4.81,16.6 5.29,16.76C5.77,16.92 6.65,16.88 7.24,16.66L8.86,16.08V17.77L8.54,17.83C6.92,18.09 5.2,18 3.5,17.42Z" />
            </svg>
            <span>Playstation</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'xbox']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-microsoft-xbox" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M6.43,3.72C6.5,3.66 6.57,3.6 6.62,3.56C8.18,2.55 10,2 12,2C13.88,2 15.64,2.5 17.14,3.42C17.25,3.5 17.54,3.69 17.7,3.88C16.25,2.28 12,5.7 12,5.7C10.5,4.57 9.17,3.8 8.16,3.5C7.31,3.29 6.73,3.5 6.46,3.7M19.34,5.21C19.29,5.16 19.24,5.11 19.2,5.06C18.84,4.66 18.38,4.56 18,4.59C17.61,4.71 15.9,5.32 13.8,7.31C13.8,7.31 16.17,9.61 17.62,11.96C19.07,14.31 19.93,16.16 19.4,18.73C21,16.95 22,14.59 22,12C22,9.38 21,7 19.34,5.21M15.73,12.96C15.08,12.24 14.13,11.21 12.86,9.95C12.59,9.68 12.3,9.4 12,9.1C12,9.1 11.53,9.56 10.93,10.17C10.16,10.94 9.17,11.95 8.61,12.54C7.63,13.59 4.81,16.89 4.65,18.74C4.65,18.74 4,17.28 5.4,13.89C6.3,11.68 9,8.36 10.15,7.28C10.15,7.28 9.12,6.14 7.82,5.35L7.77,5.32C7.14,4.95 6.46,4.66 5.8,4.62C5.13,4.67 4.71,5.16 4.71,5.16C3.03,6.95 2,9.35 2,12A10,10 0 0,0 12,22C14.93,22 17.57,20.74 19.4,18.73C19.4,18.73 19.19,17.4 17.84,15.5C17.53,15.07 16.37,13.69 15.73,12.96Z" />
            </svg>
            <span>Xbox</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'nintendo']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-nintendo-switch" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M10.04,20.4H7.12C6.19,20.4 5.3,20 4.64,19.36C4,18.7 3.6,17.81 3.6,16.88V7.12C3.6,6.19 4,5.3 4.64,4.64C5.3,4 6.19,3.62 7.12,3.62H10.04V20.4M7.12,2A5.12,5.12 0 0,0 2,7.12V16.88C2,19.71 4.29,22 7.12,22H11.65V2H7.12M5.11,8C5.11,9.04 5.95,9.88 7,9.88C8.03,9.88 8.87,9.04 8.87,8C8.87,6.96 8.03,6.12 7,6.12C5.95,6.12 5.11,6.96 5.11,8M17.61,11C18.72,11 19.62,11.89 19.62,13C19.62,14.12 18.72,15 17.61,15C16.5,15 15.58,14.12 15.58,13C15.58,11.89 16.5,11 17.61,11M16.88,22A5.12,5.12 0 0,0 22,16.88V7.12C22,4.29 19.71,2 16.88,2H13.65V22H16.88Z" />
            </svg>
            <span>Nintendo</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'perifericos']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24"
                xml:space="preserve">
                <path
                    d="M12.4,5.611V0.949c0-0.221-0.18-0.4-0.4-0.4s-0.4,0.179-0.4,0.4v4.662C8.87,5.819,6.705,8.083,6.705,10.865v7.292
                            c0,2.919,2.376,5.294,5.295,5.294s5.295-2.375,5.295-5.294v-7.292C17.295,8.083,15.13,5.819,12.4,5.611z M12,6.37
                            c2.479,0,4.494,2.016,4.494,4.495v1.166h-3.383V8.659c0-0.613-0.499-1.111-1.111-1.111s-1.111,0.499-1.111,1.111v3.372H7.506v-1.166
                            C7.506,8.386,9.521,6.37,12,6.37z M12.311,8.659v3.556c0,0.171-0.139,0.311-0.311,0.311s-0.311-0.14-0.311-0.311V8.659
                            c0-0.172,0.139-0.312,0.311-0.312S12.311,8.487,12.311,8.659z M12,22.651c-2.479,0-4.494-2.016-4.494-4.495V12.83h3.595
                            c0.2,0.292,0.52,0.495,0.899,0.495s0.699-0.204,0.899-0.495h3.595v5.326C16.494,20.635,14.479,22.651,12,22.651z" />
            </svg>
            <span>Perifericos</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('categoria', ['categoria' => 'otros']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path
                    d="M16 6H8a6 6 0 0 0 0 12h8a6 6 0 0 0 0-12zm-5 7H9v2H7v-2H5v-2h2V9h2v2h2v2zm3.5 2a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm3-3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                </path>
            </svg> <span>Otros</span>
        </a>
    </div>

    <!-- Product List -->
    @if ($productos->isEmpty())
        <!-- component -->
        <div class="flex min-h-screen items-center justify-center bg-gray-100">
            <div class="rounded-lg bg-gray-50 px-16 py-14">
                <div class="flex justify-center">
                    <div class="rounded-full bg-red-200 p-6">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-500 p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">NO HAY PRODUCTOS</h3>
                <p class="w-[230px] text-center font-normal text-gray-600"></p>
            </div>
        </div>
    @endif
    <section class="py-10 bg-gray-100 flex">
        <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($productos as $producto)
                @if (Auth::user())
                    @if ($producto->user_id != Auth::user()->id)
                        <article data-category="{{ $producto->categoria }}"
                            class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <div class="relative flex items-end overflow-hidden rounded-xl">
                                <img src="{{ asset($producto->foto) }}" alt="console Photo" class="w-96 h-48" />
                            </div>

                            <div class="mt-1 p-2">

                                <h2 class="text-slate-700">{{ $producto->nombre }}</h2>
                                <p class="mt-1 text-sm text-slate-400">{{ $producto->user->name }}</p>
                                <p class="mt-1 text-sm text-slate-400">{{ $producto->descripcion }}</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-blue-500">{{ $producto->precio }}</p>

                                    <div class="flex items-center space-x-1.5 rounded-lg px-4 py-1.5 text-white duration-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg>

                                        @auth
                                            <form action="{{ route('agregaritem') }}" method="POST">
                                                @csrf
                                                <div class="flex md:mt-2 lg:mt-0">
                                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                                                    <button type="submit"
                                                        class="linear rounded-[5px] bg-blue-700 px-4 py-2 text-xs font-medium  transition duration-200  hover:bg-brand-800 active:bg-brand-700 text-white">Agregar
                                                        al carrito</button>
                                                </div>
                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endif
                @else
                    <article data-category="{{ $producto->categoria }}"
                        class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                        <div class="relative flex items-end overflow-hidden rounded-xl">
                            <img src="{{ asset($producto->foto) }}" alt="console Photo" class="w-96 h-48" />
                        </div>
                        <div class="mt-1 p-2">
                            <h2 class="text-slate-700">{{ $producto->nombre }}</h2>
                            <p class="mt-1 text-sm text-slate-400">{{ $producto->user->name }}</p>
                            <p class="mt-1 text-sm text-slate-400">{{ $producto->descripcion }}</p>

                            <div class="mt-3 flex items-end justify-between">
                                <p class="text-lg font-bold text-blue-500">{{ $producto->precio }}</p>

                                <div class="flex items-center space-x-1.5 rounded-lg px-4 py-1.5 text-white duration-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryLinks = document.querySelectorAll('.filter-category');

            categoryLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const categoria = this.getAttribute('data-categoria');

                    // Hacer una solicitud AJAX al servidor con la categoría seleccionada
                    fetch('/-categoria', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Asegúrate de tener el token CSRF si estás utilizando Laravel
                            },
                            body: JSON.stringify({
                                categoria: categoria
                            })
                        })
                        .then(response => {
                            // Manejar la respuesta si es necesario
                            console.log('Categoría enviada con éxito');
                        })
                        .catch(error => {
                            console.error('Error al enviar la categoría:', error);
                        });
                });
            });
        });
    </script>
@endsection
