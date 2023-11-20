@extends('Layouts.layout')

@section('content')
    @foreach ($pedidos as $pedido)
    @endforeach

    <div class="min-h-full my-4 flex items-center justify-center px-4">
        <div class="max-w-4xl bg-white dark:bg-gray-800 w-full rounded-lg shadow-xl">
            <div class="p-4 border-b">
                <h2 class="text-2xl ">
                    Detalles de Pedido
                </h2>
                <p class="text-sm text-gray-500">
                    Detalles sobre el Cliente y Pedido realizado.
                </p>
            </div>
            <div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Nombre
                    </p>
                    <p>
                        {{ $pedido->name }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Correo Electronico
                    </p>
                    <p>
                        {{ $pedido->email }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Pais
                    </p>
                    <p>
                        {{ $pedido->pais }}

                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Ciudad
                    </p>
                    <p>
                        {{ $pedido->ciudad }}

                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Codigo Postal
                    </p>
                    <p>
                        {{ $pedido->codigo_postal }}

                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
                    <p class="text-gray-600 dark:text-white">
                        Direccion
                    </p>
                    <p>
                        {{ $pedido->direccion }}

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b dark:text-white">
        <p class="text-gray-600 dark:text-white">
            Total Facturado
        </p>
        <b>
            ${{ number_format($pedido->total, 0, ',', '.') }}
        </b>
    </div>
@endsection
