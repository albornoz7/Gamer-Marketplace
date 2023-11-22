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
                                    {{ \Carbon\Carbon::parse($orden->created_at)->formatLocalized('%d %B %Y %I:%M %p') }}
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div
                                        class="inline-flex items-center px-3 py-1 rounded-full gap-x-2
                    @switch(true)
                    @case($orden->productos->status == 'PAGADO')
                    text-cyan-500 bg-blue-100/60 dark:bg-gray-800
                        @break

                    @case($orden->status == 'CANCELADO')
                        text-red-500 bg-red-200 dark:bg-gray-800
                        @break
                    @case($orden->productos->status == 'PENDIENTE')
                        text-gray-500 bg-gray-200 dark:bg-gray-800
                        @break
                    @case($orden->productos->status == 'ACEPTADO')
                        text-blue-500 bg-blue-100/60 dark:bg-gray-800
                        @break
                    @case($orden->productos->status == 'COMPLETADO')
                        text-green-500 bg-green-100/60 dark:bg-gray-800
                        @break
                    @endswitch
                    ">
                                        @switch(true)
                                            @case($orden->productos->status == 'PAGADO')
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            @break

                                            @case($orden->productos->status == 'COMPLETADO')
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" width="12" height="12">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.5 12.75l6 6 9-13.5" />
                                                </svg>
                                            @break

                                            @case($orden->productos->status == 'ACEPTADO')
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" width="12" height="12">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.5 12.75l6 6 9-13.5" />
                                                </svg>
                                            @break

                                            @case($orden->productos->status == 'PENDIENTE')
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10"
                                                        stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            @break

                                            @case($orden->productos->status == 'CANCELADO')
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            @break
                                        @endswitch
                                        <h2 class="text-sm font-normal">{{ $orden->productos->status }}</h2>
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
                                        <button
                                            class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none"
                                            onclick="cambiarproductos->status({{ $orden->id }})">
                                            Cambiar productos->status
                                        </button>
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


@endsection
