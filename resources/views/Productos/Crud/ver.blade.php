@extends('Layouts.layout')

@section('content')
    <div class="row mt-6">
        <div>
            {{-- <a href="{{ route('crear.producto') }}" class="px-4 py-2 bg-blue-500 m-5 text-white rounded-lg">Agregar Nuevo
                Producto</a> --}}
        </div>
    </div>
    <!-- component -->
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Foto</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descripcion</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cantidad</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Precio</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Categoria</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha de Publicacion</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($productos as $producto)
                    @if ($producto->user_id == auth()->id())
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="relative h-10 w-10">
                                    <img class="h-full w-full rounded-full object-cover object-center"
                                        src="{{ $producto->foto }}" alt="" />
                                    <span
                                        class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->nombre }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->descripcion }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->cantidad }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->precio }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->categoria }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $producto->created_at }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($producto->status == 'Habilitado')
                                    <form action="{{ route('inabilitar', $producto->id) }}" id="deshabilitar" method="POST">
                                        @csrf <!-- Protección CSRF para Laravel -->
                                        <button type="submit"
                                            class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600" title="Inhabilitar producto">
                                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                            {{ $producto->status }}
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('habilitar', $producto->id) }}"  id="habilitar" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-red-600" title="habilitar producto">
                                            <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                            {{ $producto->status }}
                                        </button>
                                    </form>
                                @endif

                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    {{-- <form action="{{ route('eliminar.producto', $producto) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form> --}}
                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('editar.producto', $producto->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>


    @if (session('mensaje'))
        <div class="borrar-producto-mensaje"> <!-- Apply the CSS class here -->
            {{ session('mensaje') }}
        </div>
        <script>
            $(document).ready(function() {
                // Add a delay of 3 seconds before hiding the message
                setTimeout(function() {
                    $(".borrar-producto-mensaje").fadeOut("slow");
                }, 2000); // 3000 milliseconds = 3 seconds
            });
        </script>
    @endif
    </div>

    {{ $productos->links() }}
    <script>

        $('#deshabilitar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Estas Seguro de Inhabilitar el Producto?',
                text: 'Podras activarlo nuevamente en dado caso que sea necesario".',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#15803d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
        
        $('#habilitar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Estas Seguro de habilitar el Producto?',
                text: 'Podras activarlo nuevamente en dado caso que sea necesario".',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#15803d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });



    </script>
@endsection
