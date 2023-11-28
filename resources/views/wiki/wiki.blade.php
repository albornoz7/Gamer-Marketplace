@extends('Layouts.PlantillaW')

@section('content')
            <swiper-container class="mySwiper w-full pt-12 pb-12" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" autoplay-delay="2000"
                autoplay-disable-on-interaction="false" loop="true">
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-4.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-5.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-6.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-7.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-8.jpg" />
                </swiper-slide>
                <swiper-slide class="bg-center bg-cover w-80 h-80">
                    <img class="block w-full" src="https://swiperjs.com/demos/images/nature-9.jpg" />
                </swiper-slide>
            </swiper-container>
            <!-- component -->
    @if (!$consolawiki->isEmpty())
        @foreach ($consolawiki as $consola)

            <div class="max-w-screen-xl mx-auto">
                <main class="mt-10">

                    <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                        <div class="absolute left-0 bottom-0 w-full h-full z-10"
                            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="{{ $consola->foto }}"
                            class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
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
