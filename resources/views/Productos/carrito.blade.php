@extends('Layouts.layout')

@section('content')
        @if (count(Cart::content()))
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <p>Compras</p>
            <table class="table-fixed">
                <thead>
                        <tr>
                        <th>foto</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <td>X</td>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach (Cart::content() as $item )
                            <tr>
                                <td><img src="{{ $producto->foto }}" alt=""></td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->precio}}</td>
                                <td>
                                    <div>
                                        <button class="py-2 px-4 bg-transparent text-red-600 font-semibold border border-red-600 rounded hover:bg-red-600 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                                        {{$item->qty}}</button>
                                        <a href="">-</a>
                                        <a href="">+</a>
                                    </div>
                                </td>
                                <td>{{number_format($item->qty * $item->precio,2)}}</td>
                                <td><a href="">X</a></td>
                            </tr>
                            @endforeach
                            <tr><td>Total{{Cart::total()}}</td></tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row">
                            <div class="grow-0 h-14 ...">
                                <a href="">Vaciar carrito</a>
                            </div>
                            <div class="grow-0 h-14 ...">
                                @auth
                                <a href="http://">Realizar Compra</a>
                                    @else
                                    <a href="">Iniciar Sesion</a>
                                @endauth
                            </div>
                    </div>
        </div>
@endsection