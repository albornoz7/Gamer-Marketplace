        @extends('Layouts.PlantillaW')

        @section('content')

        <swiper-container class="mySwiper w-full pt-12 pb-12"  effect="coverflow" grab-cursor="true" centered-slides="true"
        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"  autoplay-delay="2000" autoplay-disable-on-interaction="false" loop="true">
        <swiper-slide class="bg-center bg-cover w-80 h-80">
          <img class="block w-full" src=" https://swiperjs.com/demos/images/nature-1.jpg" />
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

      <h1 class="font-normal text-2xl leading-6 text-gray-800 text-center p-2 ">Mundo Gamer</h1>

      <p class="mb-3 text-right text-gray-500 dark:text-gray-600 indent-8" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae sed, iusto itaque corrupti nesciunt Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil excepturi minima dolore tempora laborum et illum illo, iusto voluptatibus sunt cupiditate, 
        sapiente nam molestiae reprehenderit quisquam fugit sint repellendus nulla. et facere ipsa modi eum eaque perspiciatis 
        sapiente? Ab maiores autem nostrum iure, nam inventore deserunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eos dolor nihil illum saepe sapiente ab aperiam laudantium. Omnis qui eaque harum blanditiis cum repudiandae sapiente laboriosam, magni quos. Blanditiis?</em>
        <p class="text-gray-500 dark:text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt in asperiores modi provident harum, molestias reiciendis maxime sit, dignissimos aliquam ducimus illo accusantium qui adipisci aut quasi recusandae quis.</p>
        <div class="relative z-0 w-full mb-6 group">
          <input type="textarea" name="descripcion" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
      </div>
        @endsection
        