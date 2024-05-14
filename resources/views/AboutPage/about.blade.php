@extends('layouts.CoffeeLayout.layout')

@section('content')
<x-page-banner.banner title="О нас" bg_image="{{ asset('images/about.jpg')}}" class="h-[400px]" />

<div class="container">
  <div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, commodi! Voluptas minima sapiente perferendis corporis obcaecati laboriosam suscipit magni deleniti quia quo, quisquam modi vel architecto, adipisci ducimus ullam reiciendis.</p>
    <img src="" alt="">
  </div>
</div>

@endsection

@section('footer')
  <x-footer.footer/>
@endsection