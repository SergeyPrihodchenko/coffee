@props(['title' => 'title', 'bg_image'])


<div {{ $attributes->merge(['class' => 'banner']) }}  style="background-image: url({{ $bg_image }});" >
  <h1 class="animate__animated animate__fadeInDown banner__heading ">{{ $title }}</h1>
</div>