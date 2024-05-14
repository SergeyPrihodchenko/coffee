@extends('layouts.CoffeeLayout.layout')

@section('content')
<x-page-banner.banner 
  :title=$title 
  bg_image="{{ $banner_img }}" 
  id="main-banner" 
  data-count="1" 
  class="h-screen" 
></x-page-banner.banner>

<section class="my-6 px-[15px] sm:max-w-[1140px] lg:px-0 lg:mx-auto appear-wrap">
  <div class="appear" data-animation="animate__animated animate__fadeInUp" >
    <x-slider.product-slider :drinks=$drinks heading="Продукты"></x-slider.product-slider>
  </div>
  <div class="flex justify-center mt-[15px]">
    <a href="{{ route('menu') }}" class="px-4 py-2 text-decoration-none text-xl border-2 border-[#eeb30f] hover:bg-[#eeb30f] text-[#212529] transition-colors">Меню</a>
  </div>

    <x-location-block.location></x-location-block.location>

</section>
@endsection

@section('footer')
  <x-footer.footer/>
@endsection

@section('scripts')
  @vite('resources/js/onScroll.js')
  @vite('resources/js/cards.js')
@endsection
