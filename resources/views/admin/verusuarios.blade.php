@extends('Layouts.layout')

@section('content')




<!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
       
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Correo Electronico</th>
        <th>rol</th>
        <th>Fecha en la que se registro</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach($usuarios as $user)
      {{-- @if($consolawiki->user_id == auth()->id()) --}}
      <tr class="hover:bg-gray-50">
        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class="text-sm">
                <div class="font-medium text-gray-700">{{ $user->name }}</div>
              </div>
        </th>
        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $user->email }}</div>
          </div>
        </td>
        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $user->roles->roll }}</div>
          </div>
        </td>


        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $user->created_at }}</div>
          </div>
        </td>
        
        <form action="{{route('eliminar_usuario',$user)}}" method="POST">
            @csrf
          @method('DELETE')
            
          <td class="px-6 py-4">
  
            <div class="flex justify-end gap-4">
            <button>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-6 w-6"
                  x-tooltip="tooltip"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                  />
                </svg>
              </button>
            </form>
 

          </div>
        </td>
        {{-- <td>
          <form action="{{route('habilitar', $producto->id)}}" method="post">
            @csrf
            <input type="submit" value="Habilitar">
        </form>
        
        <form action="{{route('inabilitar',$producto->id)}}" method="post">
            @csrf
            <input type="submit" value="Inhabilitar">
            
        </form>
        </td> --}}
      </tr>
      {{-- @endif --}}

      <!-- component -->
<!-- This is an example component -->
{{-- <div class="max-w-2xl mx-auto bg-white p-16 rounded">

	<div id="accordion-flush" data-accordion="collapse"
		data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
		data-inactive-classes="text-gray-500 dark:text-gray-400">
		<h2 id="accordion-flush-heading-1">
			<button type="button" class="flex justify-between items-center py-5 w-full font-medium text-left text-gray-900 rounded-t-xl border-b border-gray-200 dark:border-gray-700 dark:text-white" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
      <span>{{ $wiki->nombre_consola }}</span>
      <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
		</h2>
		<div id="accordion-flush-body-1" aria-labelledby="accordion-flush-heading-1">
			<div class="py-5 border-b border-gray-200 dark:border-gray-700">
				<p class="mb-2 text-gray-500 dark:text-gray-400">{{ $wiki->descripcion_consola }}<img class="h-full w-full rounded-full object-cover object-center" src="{{ $wiki->foto }}" alt=""/>
          <a x-data="{ tooltip: 'Edite' }" href="{{route('editarconsola',$wiki->id)}}">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6"
              x-tooltip="tooltip"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
              />
            </svg>
          </a>	</p>
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
</div> --}}

      @endforeach
    </tbody>
  </table>
    {{-- @if(session('mensaje'))
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
    @endif --}}


{{-- {{$consolawiki->links()}} --}}


@endsection
