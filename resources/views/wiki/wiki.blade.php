@extends('Layouts.layout')

@section('content')
    <div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center bg-white text-gray-800">
        <!-- Agrega atributos data-categoria con el nombre de la categoría a cada enlace -->
        <a rel="noopener noreferrer" href="{{ route('wiki') }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Historia</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'playstation']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-sony-playstation" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M9.5,4.27C10.88,4.53 12.9,5.14 14,5.5C16.75,6.45 17.69,7.63 17.69,10.29C17.69,12.89 16.09,13.87 14.05,12.89V8.05C14.05,7.5 13.95,6.97 13.41,6.82C13,6.69 12.76,7.07 12.76,7.63V19.73L9.5,18.69V4.27M13.37,17.62L18.62,15.75C19.22,15.54 19.31,15.24 18.83,15.08C18.34,14.92 17.47,14.97 16.87,15.18L13.37,16.41V14.45L13.58,14.38C13.58,14.38 14.59,14 16,13.87C17.43,13.71 19.17,13.89 20.53,14.4C22.07,14.89 22.25,15.61 21.86,16.1C21.46,16.6 20.5,16.95 20.5,16.95L13.37,19.5V17.62M3.5,17.42C1.93,17 1.66,16.05 2.38,15.5C3.05,15 4.18,14.65 4.18,14.65L8.86,13V14.88L5.5,16.09C4.9,16.3 4.81,16.6 5.29,16.76C5.77,16.92 6.65,16.88 7.24,16.66L8.86,16.08V17.77L8.54,17.83C6.92,18.09 5.2,18 3.5,17.42Z" />
            </svg>
            <span>Playstation</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'xbox']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-microsoft-xbox" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M6.43,3.72C6.5,3.66 6.57,3.6 6.62,3.56C8.18,2.55 10,2 12,2C13.88,2 15.64,2.5 17.14,3.42C17.25,3.5 17.54,3.69 17.7,3.88C16.25,2.28 12,5.7 12,5.7C10.5,4.57 9.17,3.8 8.16,3.5C7.31,3.29 6.73,3.5 6.46,3.7M19.34,5.21C19.29,5.16 19.24,5.11 19.2,5.06C18.84,4.66 18.38,4.56 18,4.59C17.61,4.71 15.9,5.32 13.8,7.31C13.8,7.31 16.17,9.61 17.62,11.96C19.07,14.31 19.93,16.16 19.4,18.73C21,16.95 22,14.59 22,12C22,9.38 21,7 19.34,5.21M15.73,12.96C15.08,12.24 14.13,11.21 12.86,9.95C12.59,9.68 12.3,9.4 12,9.1C12,9.1 11.53,9.56 10.93,10.17C10.16,10.94 9.17,11.95 8.61,12.54C7.63,13.59 4.81,16.89 4.65,18.74C4.65,18.74 4,17.28 5.4,13.89C6.3,11.68 9,8.36 10.15,7.28C10.15,7.28 9.12,6.14 7.82,5.35L7.77,5.32C7.14,4.95 6.46,4.66 5.8,4.62C5.13,4.67 4.71,5.16 4.71,5.16C3.03,6.95 2,9.35 2,12A10,10 0 0,0 12,22C14.93,22 17.57,20.74 19.4,18.73C19.4,18.73 19.19,17.4 17.84,15.5C17.53,15.07 16.37,13.69 15.73,12.96Z" />
            </svg>
            <span>Xbox</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'nintendo']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="mdi-nintendo-switch" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M10.04,20.4H7.12C6.19,20.4 5.3,20 4.64,19.36C4,18.7 3.6,17.81 3.6,16.88V7.12C3.6,6.19 4,5.3 4.64,4.64C5.3,4 6.19,3.62 7.12,3.62H10.04V20.4M7.12,2A5.12,5.12 0 0,0 2,7.12V16.88C2,19.71 4.29,22 7.12,22H11.65V2H7.12M5.11,8C5.11,9.04 5.95,9.88 7,9.88C8.03,9.88 8.87,9.04 8.87,8C8.87,6.96 8.03,6.12 7,6.12C5.95,6.12 5.11,6.96 5.11,8M17.61,11C18.72,11 19.62,11.89 19.62,13C19.62,14.12 18.72,15 17.61,15C16.5,15 15.58,14.12 15.58,13C15.58,11.89 16.5,11 17.61,11M16.88,22A5.12,5.12 0 0,0 22,16.88V7.12C22,4.29 19.71,2 16.88,2H13.65V22H16.88Z" />
            </svg>
            <span>Nintendo</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'sega']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 32 32">
                <path d="M28.307 5.521l-0.010 4.438h-14.135c-0.292 0-0.526 0.245-0.526 0.531 0 0.297 0.24 0.536 0.526 0.536l3.682-0.021c5.797 0 10.49 4.698 10.49 10.49 0 5.797-4.693 10.49-10.49 10.49l-14.182 0.016 0.010-4.5h14.177c3.318 0 6.005-2.688 6.005-6.005s-2.688-6.010-6.005-6.010l-3.698-0.036c-2.745 0-4.969-2.224-4.969-4.964 0-2.745 2.224-4.964 4.964-4.964zM3.682 26.458l-0.005-4.443h14.146c0.281 0 0.51-0.234 0.51-0.516 0-0.286-0.229-0.516-0.51-0.516h-3.661c-5.792 0-10.484-4.698-10.484-10.495 0-5.792 4.693-10.49 10.484-10.49l14.135 0.005 0.010 4.464-14.141 0.005c-3.318 0-6 2.693-6 6.010s2.698 6.005 6.021 6.005l3.698 0.042c2.74 0 4.964 2.224 4.964 4.964s-2.224 4.958-4.964 4.958h-14.198z"/>
            </svg>
            <span>sega</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'atari']) }}"
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
            <span>Atari</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'arcade']) }}"
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
            <span>Arcade</span>
        </a>

    </div>

    <swiper-container class="mySwiper w-full pt-12 pb-12" effect="coverflow" grab-cursor="true" centered-slides="true"
        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" autoplay-delay="2000"
        autoplay-disable-on-interaction="false" loop="true">
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1d9WeoGxKbL_4CnRvTC9T_fdibXODzqHsJKNX53z8RIdrooVzYVpDCQEObVJ3U-Cy6eQ&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtFT4WvIZQyjMRBhg9mYd2CfE4FbgMEmHmhQ&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGMHlrO3l0DVND9x9__efT7QS3iK4Q1r9nAujPwb7cVOMCIT-j7XgIceAXPjO4EV-vglw&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEZ62QMh9oas0HCZIimNmhMTj3-OqAd5hxWw&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3v21lP4i2bX5ttelG8fAzQqsOQJpuRKXTow&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2iQQsa61DHhr6zK8bn8t2G7WX8wR9J9c-CHcmvuwZDyyfAJnwJovpqVqaeVHUPBuT_UY&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="data:image/jpeg;base64,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" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ2KaagC8FolYKi09OvJv8x1krabDQnRFz_A&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://w0.peakpx.com/wallpaper/844/692/HD-wallpaper-god-of-war-game-gaming-godofwar.jpg" />
        </swiper-slide>
    </swiper-container>
    <!-- component -->
    @if (!$consolas->isEmpty())
        @foreach ($consolas as $consola)
            <div class="max-w-screen-xl mx-auto">
                <main class="mt-10">

                    <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                        <div class="absolute left-0 bottom-0 w-full h-full z-10"
                            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="{{ asset($consola->foto) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                        <div class="p-4 absolute bottom-0 left-0 z-20">
                            <a href="#"
                                class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Consolas</a>
                            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                                {{ $consola->nombre_consola }}
                            </h2>
                        </div>
                    </div>

                    <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                        <p class="pb-6">{{ $consola->descripcion_consola }}</p>
                    </div>
                </main>
                <!-- main ends here -->
            </div>
        @endforeach
    @else
        <h1 class="font-normal text-2xl leading-6 text-gray-800 text-center p-2 ">Sin na
        </h1>
    @endif

@endsection
