@extends('Layouts.layout')

@section('content')

    <div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center bg-white text-gray-800">
        <!-- Agrega atributos data-categoria con el nombre de la categoría a cada enlace -->
        <a rel="noopener noreferrer" href="{{ route('wiki') }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z"></path></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 3h2v2H6zm2 16h3v2H8zm8-16h2v2h-2zm-3 16h3v2h-3zm7-8V9h-2V7h-2V5h-2v2h-4V5H8v2H6v2H4v2H2v8h2v-4h2v4h2v-3h8v3h2v-4h2v4h2v-8zm-10 1H8V9h2zm6 0h-2V9h2z"></path></svg>
            <span>Atari</span>
        </a>
        <a rel="noopener noreferrer" href="{{ route('wiki.vista', ['nombre_consola' => 'arcade']) }}"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24">
                <path d="M 12 1 C 10.346 1 9 2.346 9 4 C 9 5.654 10.346 7 12 7 C 13.654 7 15 5.654 15 4 C 15 2.346 13.654 1 12 1 z M 13 7.1035156 L 13 13 L 11 13 L 11 7.1054688 C 10.652 7.1794687 10.308609 7.2884531 9.9746094 7.4394531 L 2.1347656 10.96875 C 1.4647656 11.27075 1.0299531 11.936031 1.0019531 12.707031 C 0.97395312 13.484031 1.360625 14.185063 2.015625 14.539062 L 8.6972656 18.154297 C 9.7312656 18.714297 10.866953 18.994141 12.001953 18.994141 C 13.136953 18.994141 14.270687 18.713297 15.304688 18.154297 L 21.986328 14.539062 C 22.640328 14.185063 23.028 13.484031 23 12.707031 C 22.971 11.936031 22.536234 11.27075 21.865234 10.96875 L 14.025391 7.4375 C 13.691391 7.2865 13.348 7.1775156 13 7.1035156 z M 7.5 12 C 8.328 12 9 12.448 9 13 C 9 13.552 8.328 14 7.5 14 C 6.672 14 6 13.552 6 13 C 6 12.448 6.672 12 7.5 12 z M 1.3554688 16.509766 C 1.1670312 16.516938 1 16.671313 1 16.882812 L 1 17.615234 C 1 18.169234 1.3135469 18.675875 1.8105469 18.921875 L 8.2949219 22.130859 C 9.4719219 22.713859 10.735 23.005859 12 23.005859 C 13.264 23.005859 14.527078 22.713859 15.705078 22.130859 L 22.197266 18.917969 C 22.688266 18.674969 23 18.173953 23 17.626953 L 23 16.884766 C 23 16.602766 22.701125 16.420687 22.453125 16.554688 C 20.847125 17.424688 16.255859 19.914062 16.255859 19.914062 C 14.948859 20.621063 13.478 20.994141 12 20.994141 C 10.522 20.994141 9.0511406 20.621062 7.7441406 19.914062 C 7.7441406 19.914062 3.152875 17.424687 1.546875 16.554688 C 1.484875 16.520938 1.4182812 16.507375 1.3554688 16.509766 z"></path>
                </svg>
            <span>Arcade</span>
        </a>

    </div>

    <swiper-container class="mySwiper w-full pt-12 pb-12" effect="coverflow" grab-cursor="true" centered-slides="true"
        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" autoplay-delay="2000"
        autoplay-disable-on-interaction="false" loop="true">
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full"
                src="https://w0.peakpx.com/wallpaper/844/692/HD-wallpaper-god-of-war-game-gaming-godofwar-thumbnail.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://i.pinimg.com/originals/ee/d4/ae/eed4aef72b1201e616794d45f7e38dfc.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://i.pinimg.com/564x/82/1f/17/821f1712ae309c33239da9d76db132a5.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://wallpapercave.com/wp/wp5214720.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://i.pinimg.com/originals/5c/ca/e3/5ccae37e5e09e8c83bd03c8f5b1575f7.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCIZBhKHqpg3gj22VrkdDzkfi-kiiJE-qhX4NVLjtDEvPFhB2LXvuHcPXmEiSWmIY_9CA&usqp=CAU" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full"
                src="https://w0.peakpx.com/wallpaper/450/652/HD-wallpaper-black-sonic-amoled-dark-logo-minimal-minimalism-sega-thumbnail.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://i.pinimg.com/736x/22/5e/6a/225e6a5ba2e36ebe67584eccfc57c31e.jpg" />
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover w-80 h-80">
            <img class="block w-full" src="https://wallpapercave.com/wp/wp5958835.png" />
        </swiper-slide>
    </swiper-container>

    <div class="max-w-3xl mx-auto">
        <p class="font-normal text-2xl leading-6 text-gray-800 text-center p-2 ">Los orígenes del videojuego se remontan a
            la década de 1950, cuando poco después de la aparición de las primeras computadoras electrónicas tras el fin de
            la Segunda Guerra Mundial, se llevaron a cabo los primeros intentos por implementar programas de carácter
            lúdico. Así, fueron creados el Nimrod (1951) o el Oxo (1952), juegos electrónicos que aún no pueden ser
            denominados videojuegos, y el Tennis for Two (1958) o el Spacewar! (1962), auténticos pioneros del género. Todos
            ellos eran todavía prototipos, juegos muy simples y de carácter experimental que no llegaron a comercializarse,
            entre otras cosas, porque funcionaban en unas máquinas que solo estaban disponibles en universidades o en
            institutos de investigación.
        <div class="w-full pl-16">
            <img src="https://source.unsplash.com/random?ux" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
        </div>

        La consola Magnavox Odyssey (1972).
        No sería hasta la década de los 70 en que, con el descenso de los costes de fabricación, aparecieron las primeras
        máquinas recreativas y los primeros videojuegos dirigidos al gran público. Títulos como Computer Space (1971) o Pong
        (1972), de Atari, inauguraron las primeras máquinas recreativas construidas al efecto, que funcionaban con monedas.
        Poco después llegarían los videojuegos a los hogares gracias a las consolas domésticas, la primera de las cuales fue
        la Magnavox Odyssey (1972), y más tarde la exitosa Atari 2600 o VCS (de 1977), con su sistema de cartuchos
        intercambiables. Por aquel entonces las máquinas de arcade empezaron a hacerse comunes en bares y salones
        recreativos, una expansión debida en parte a un matamarcianos que alcanzó gran popularidad, el Space Invaders
        (1978). Otros juegos que marcaron esta primera época fueron Galaxian (1979), Asteroids (1979) o Pac-Man (1980).

        <div class="w-full pl-16">
            <img src="https://source.unsplash.com/random?ux" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
        </div>
        La consola portátil Game Boy (1989).
        En los años 1980, la empresa norteamericana Atari tuvo que compartir su dominio en la industria del videojuego con
        dos compañías llegadas de Japón: Nintendo (con su famosa consola NES) y SEGA (con la Master System). Paralelamente,
        surgió una generación de ordenadores personales asequibles y con capacidades gráficas que llegaron a los hogares de
        millones de familias, como fueron el Spectrum, el Amstrad CPC, el Commodore 64 o el MSX. A partir de entonces, los
        videojuegos empezaron a convertirse en una poderosa industria. Fue además una época muy creativa para los
        desarrolladores de videojuegos; muchos de la principales géneros que existen hoy en día (conducción, lucha,
        plataformas, estrategia, aventura...) tomaron forma en esta década. Por otra parte, aparecieron también las primeras
        consolas de bolsillo, también conocidas como «maquinitas», que aunque hasta la llegada de la Game Boy de Nintendo
        (1989) solo ejecutaban un juego cada una, alcanzaron gran popularidad entre los más jóvenes.!
        <div class="w- pl-16">
            <img src="https://source.unsplash.com/random?ux" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
        </div>
        </p>

    </div>
@endsection
