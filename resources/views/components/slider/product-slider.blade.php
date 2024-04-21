@props(['drinks', 'heading'])
<div>
  <h2 class="mb-4 text-4xl font-thin">{{ $heading }}</h2>
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach ($drinks as $drink)
      <div class="swiper-slide">
        @component('components.product-card.index')
          @slot('image')
            {{ $drink['img'] }}
          @endslot
          @slot('alt')
            {{ $drink['title'] }}
          @endslot
          @slot('title')
              {{ $drink['title'] }}
          @endslot
          @slot('description')
            {{ $drink['description'] }}
          @endslot
        @endcomponent
      </div>        
      @endforeach
      {{-- <div class="swiper-slide">
        <x-product-card
          description="Матча Латте"
          alt="Матча" 
          image="{{ asset('storage/images/pinkycoffee-2.jpg') }}"
        />
      </div>--}}
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