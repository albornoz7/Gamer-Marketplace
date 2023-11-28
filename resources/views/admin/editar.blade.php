
@extends('Layouts.PlantillaW')

@section('content')

<form action="{{route('actualizarconsola',$consolawiki)}}" method="POST"  enctype="multipart/form-data" class="mt-20">
    @method('PUT')       
    @csrf
    <div class="relative z-0 w-full mb-6 group">
<input  type="text" name="descripcion_consola" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-max-98" placeholder=" " value="{{$consolawiki->descripcion_consola}}" required/>
        <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
    </div>
        <div class="relative z-8 w-full mb-6 group">
            <input type="hidden" name="user_id" value="">
            <input type="file" name="foto" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Selecionar Foto</label>
        </div>

        <button type="submit" class="dark:bg-gray-400 w-full bg-slate-900 duration-200">
            <div
                class="bg-blue-400 dark:bg-slate-900 dark:border-blue-400 active:translate-x-0 active:translate-y-0 flex items-center border-slate-900 border-2 duration-200 px-4 py-2 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 w-full"
            >
                <div class="dark:text-gray-400 mr-4 flex items-center justify-center">
                    <div class="w-10 h-10">
                        
                    </div>
                </div>
                <h4 class="dark:text-gray-400 duration-200">
                    <div class="flex justify-start items-center">Enviar</div>
                </h4>
            </div>
        </button>
</form>

@if ($errors->any())
    <h1>error</h1>
@endif
@endsection