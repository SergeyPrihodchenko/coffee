<div class="mt-6 px-[15px] lg:max-w-[1140px] lg:px-0 lg:mx-auto">
  <h2 class="mb-4 text-2xl font-thin">Продукты</h2>

  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <x-product-card 
          description="Фильтр кофе2" 
          alt="Фильтр кофе" 
          image="{{ Storage::url('images/pcoffee-1.jpg') }}" 
        />
      </div>
      <div class="swiper-slide">
        <x-product-card
          description="Матча Латте"
          alt="Матча" 
          image="{{ asset('storage/images/pinkycoffee-2.jpg') }}"
        />
      </div>
      <div class="swiper-slide">
        <x-product-card
        description="Капучино"
        alt="Капучино" 
        image="{{ asset('images/pinkycoffee-3.jpg') }}" 
        />
      </div>
      <div class="swiper-slide">
        <x-product-card
        description="Флет Уайт"
        alt="Флет Уай" 
        image="{{ asset('images/pinkycoffee-4.jpg') }}"
        />
      </div>
      <div class="swiper-slide">
        <x-product-card 
          description="Фильтр кофе" 
          alt="Фильтр кофе" 
          image="{{ asset('images/pcoffee-1.jpg') }}" 
        />
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    {{-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> --}}
  
    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
  </div>
</div>