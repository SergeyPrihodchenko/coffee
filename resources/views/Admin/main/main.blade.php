<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Main Page') }}
      </h2>
  </x-slot>
  <div class="container-lg pt-5 relative">
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    <h3 class="font-bold text-[18px] md:text-3xl">Настройки - Главная страница</h3>
    <form method="POST" action="{{ route('main.store') }}" enctype="multipart/form-data">
      @csrf
      <span>Текущий заголовок: {{ $title }}</span>
      <input type="text" name='main_heading' placeholder="Введите заголовок" class="block w-full rounded-md border-0  text-gray-900 my-3">
      <div class="bg-white overflow-hidden shadow-sm rounded-md">
        <div class="p-6 text-gray-900">
            <div class="col-span-full">
                <label for="cover-photo" class="block text-md font-thin leading-6 text-gray-900">
                  Загрузить картинку
                </label>
                <div class="mt-2 flex justify-center rounded-md border border-dashed border-gray-900/25 px-6 py-10">
                  <div class="text-center">
                    <div class="img-previou">
                    </div>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="banner_img" type="file" class="sr-only file-input" accept="image/*">
                      </label>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG</p>
                  </div>
                </div>
        </div>
    </div>
      </div>
      
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-5">
        Добавить
      </button>
    </form>


    <div>
      @foreach ($list as $item )
      <div class="py-4">
        {{-- {{ $item['main_heading'] }} --}}
        Картинка на баннере:
        <div class="w-36 rounded-sm overflow-hidden">
          <img src="{{$item['banner_img_path']}}" alt="">
        </div>
      </div>
      @endforeach
    </div>

    

  </div>
</x-app-layout>