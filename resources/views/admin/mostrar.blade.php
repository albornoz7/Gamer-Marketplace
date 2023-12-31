@extends('Layouts.layout')

@section('content')




<!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Foto</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descripcion</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach($consolawiki as $wiki)
      {{-- @if($consolawiki->user_id == auth()->id()) --}}
      <tr class="hover:bg-gray-50">
        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
          <div class="relative h-40 w-40">
            <img class="h-full w-full object-cover object-center" src="{{ $wiki->foto }}" alt=""/>
          </div>
        </th>
        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $wiki->nombre_consola }}</div>
          </div>
        </td>
        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $wiki->descripcion_consola }}</div>
          </div>
        </td>


        <td>
          <div class="text-sm">
            <div class="font-medium text-gray-700">{{ $wiki->created_at }}</div>
          </div>
        </td>
        
        <td>
          <div class="text-sm">

            <a href="{{route('editarconsola', $wiki->id)}}">
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
            </a>
          </div>
        </td>

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
