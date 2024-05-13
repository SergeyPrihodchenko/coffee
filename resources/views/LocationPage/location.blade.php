@extends('layouts.CoffeeLayout.layout')

@section('content')
<x-page-banner.banner title="Наши кофейни" bg_image="{{ asset('images/inner.jpg')}}" class="h-[400px]" />
  <div class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="location__card flex-col md:justify-between gap-4 w-full border-[#eeb30f] border-[5px] p-4">
        <img src="{{ asset('images/pinky.webp') }}" width="190" height="190" class="aspect-square object-cover" alt="Pinky">
      <div class="location__card_info">
        <div class="relative pl-7 ">
          <i class="bi bi-geo-alt absolute top-0 left-0"></i>
          <span class="text-md font-thin">Московская область, Клин, Бородинский проезд, 25</span>
        </div>
        <div class="relative pl-7 ">
          <i class="bi bi-clock absolute top-0 left-0 "></i>
          <span class="text-md font-thin">Часы работы</span>
        </div>
      </div>
    </div>
      <div class="location__card flex justify-between gap-4 w-full border-[#eeb30f] border-[5px] p-4">
          <img src="{{ asset('images/pinky.webp') }}" width="190" class="aspect-square object-cover" alt="Pinky">
        <div class="location__card_info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <span class="text-md font-thin">Московская область, Клин, Советская площадь, 3</span>
          </div>
          <div>
            <i class="bi bi-clock"></i>
            <span class="text-md font-thin">Часы работы</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection