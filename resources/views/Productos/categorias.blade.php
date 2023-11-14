@extends('Layouts.layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 ">

        @foreach ($productos as $producto)
            <div
                class="!z-5 relative m-4 rounded-[20px] max-w-[300px] bg-clip-border bg-gray-200 shadow-3xl shadow-lg flex flex-col w-full !p-4 3xl:p-![18px]  undefined">
                <div class="h-full w-full">
                    <div class="relative w-full">
                        <img src="{{ $producto->foto }}" alt="">
                    </div>
                    <div class="mb-3 flex items-end justify-end px-1 mt-4">
                        <div class="mb-2 ">
                            <p class="text-lg font-bold text-navy-700">{{ $producto->nombre }}</p>
                            <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">{{ $producto->descripcion }}</p>
                            <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">Precio: {{ $producto->precio }}</p>
                        </div>
                        <form action="{{ route('agregaritem') }}" method="POST">
                            @csrf
                            <div class="flex md:mt-2 lg:mt-0">
                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                                <button href=""type="submit"
                                    class="linear rounded-[20px] bg-brand-900 px-4 py-2 text-xs font-medium  transition duration-200 hover:bg-brand-800 active:bg-brand-700 text-white">Agregar
                                    al carrito</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- @if (count(Cart::content()))
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <p>Compras</p>
                <table class="table-fixed">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                            <tr class="bg-white dark:bg-gray-800">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty}} </td>
                                <td>{{ number_format($item->qty * $item->price, 2) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Total{{ Cart::total() }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <p><a href="/vercarrito">Mostrar Carrito</a></p>
        @endif --}}
    </div>
    
    {{-- @if (count(Cart::content()))
<div  class="relative overflow-x-auto">
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                <th scope="row" class="px-6 py-3 text-base">Total{{ Cart::total() }}</th>
            </tr>
        </tfoot>
    </table>
    @endif
</div> --}}

@endsection
