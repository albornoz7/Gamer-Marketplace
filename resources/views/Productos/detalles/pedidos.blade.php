@extends('Layouts.layout')

@section('content')
    <section class="m-6 relative overflow-x-auto px-4 sm:px-6 lg:px-8 py-4 w-full max-w-9xl mx-auto">
        <div class="bg-white rounded-lg p-7 dark:bg-slate-800">

            @if (!$pedidos->count())
                <div class="text-center mt-12  py-20 rounded-md dark:bg-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-200" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path
                            d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z">
                        </path>
                        <circle cx="8.496" cy="8.495" r="1.505"></circle>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No Existen Pedidos</h3>
                    <p class="mt-1 text-sm text-gray-500  dark:text-white">Aun no existen pedidos realizados.</p>
                </div>
            @endif


            @if ($pedidos->count())
                <div class="px-4 py-3 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium ">Pedidos</h3>
                    <p class="mt-1 text-sm text-gray-500">A continuación podras ver aquellos pedidos hechos por los
                        clientes.</p>
                </div>
                <table class=" w-full text-sm text-left  divide-y divide-gray-200 dark:divide-gray-700" id="listado">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center gap-x-3">
                                    <button class="flex items-center gap-x-2">
                                        <span>Pedido</span>
                                    </button>
                                </div>
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Fecha
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Estado
                            </th>

                            <th scope="col"
                                class="px-5 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Cliente
                            </th>

                            <th scope="col"
                                class="px-5 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Productos
                            </th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Total
                            </th>

                            <th scope="col" class="relative py-3.5 px-4">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($pedidos as $orden)
                            <tr>
                                <td
                                    class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>#{{ $orden->pedidos->id }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    {{\Carbon\Carbon::parse($orden->created_at)->formatLocalized('%d %B %Y %I:%M %p') }}
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2">
                                        <h2 id="estadoProducto" class="text-sm font-normal">{{ $orden->pedidos->status }}</h2>
                                    </div>

                                        
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                {{ $orden->pedidos->user->name }}
                                            </h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                {{ $orden->pedidos->users }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <p class="underline underline-offset-8 uppercase "> {{ $orden->productos->nombre }}</p>
                                        <br>

                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    ${{$orden->pedidos->total }}
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">

                                    <div class="flex items-center gap-x-6">
                                        <form action="{{ route('detalles', ['id' => $orden->id]) }}">
                                            <input type="hidden" value="{{ $orden->id }}">
                                            <button
                                                class="text-green-500 transition-colors duration-200 hover:text-gray-500 focus:outline-none">
                                                Ver Detalles
                                            </button>
                                        </form>
                                        @if ($orden->pedidos->status == 'PAGADO')
                                            <a href="{{route('change.status',$orden->pedidos->id)}}"  class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Cambiar Estado
                                            </a>
                                        @else
                                            <a href="{{route('change.status',$orden->pedidos->id)}}"  class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Cambiar Estado
                                            </a>
                                        @endif
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $pedidos->links() }}
            @endif
        </div>
    </section>
    <script>
        function cambiarEstado(id) {
            // Puedes mostrar una ventana de confirmación al usuario antes de actualizar el estado
            if (confirm("¿Estás seguro de que deseas cambiar el estado del producto?")) {
                // Realiza una petición al controlador para actualizar el estado
                fetch(`/actualizarEstado/${id}`, {
                    method: 'POST',
                    body: JSON.stringify({ status: 'nuevo_estado' }), // Reemplaza 'nuevo_estado' con el estado deseado
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Asegúrate de incluir el token CSRF si estás utilizando Laravel
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Aquí puedes realizar alguna acción adicional después de actualizar el estado, como mostrar un mensaje de éxito
                    alert("El estado del producto ha sido actualizado correctamente.");
                })
                .catch(error => {
                    // Maneja cualquier error que pueda ocurrir durante la actualización del estado
                    console.error('Error:', error);
                });
            }
            // Después de actualizar el estado del producto, obtén el nuevo estado
            var nuevoEstado = "Pagado";

            // Selecciona el elemento <h2> por su identificador
            var estadoProducto = document.getElementById("estadoProducto");

            // Actualiza el contenido del elemento <h2> con el nuevo estado
            estadoProducto.textContent = nuevoEstado;
        }
    </script>

@endsection
