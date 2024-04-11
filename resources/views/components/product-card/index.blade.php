@props(['alt'=>'coffee', 'title' => 'Title', 'description' =>'', 'image' => ''])


<div class="w-full mb-4">
  <figure class="">
    <div class="card-item relative overflow-hidden">
      <img src="{{ $image }}"
          alt="{{ $alt }}">
          <div class="card-overlay">
            <i class="bi bi-eye text-6xl text-gray-400"></i>
          </div>
          <div class="card-info">
            {{ $description }}
          </div>
    </div>
    <figcaption class="font-light text-2xl lg:text-xl">
      {{ $title }}
    </figcaption>
  </figure>
    
</div>