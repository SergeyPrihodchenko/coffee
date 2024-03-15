@props(['alt'=>'coffee', 'description' => 'Description', 'image' => ''])


<div class="w-full  mb-4 ">
  <figure class="mb-0">
    <img src="{{ $image }}"
        alt="{{ $alt }}">
    <figcaption class="font-light text-2xl lg:text-xl">{{ $description }}</figcaption>
  </figure>
</div>