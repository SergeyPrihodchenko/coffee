@extends('layouts.CoffeeLayout.layout')

@section('content')
<x-page-banner.banner :title=$title bg_image="{{ $banner_img }}" id="main-banner" data-count="1" class="h-screen" />

<x-slider.product-slider :drinks=$drinks />

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor sapiente nostrum illum, iusto ea voluptatum? Optio, maiores culpa aperiam explicabo labore sint esse sed vero eligendi iusto adipisci ea.</p>
@endsection