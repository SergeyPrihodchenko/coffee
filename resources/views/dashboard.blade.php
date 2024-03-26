<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панелька добавления') }}
        </h2>
    </x-slot>

     <div class="relative mt-2.5 ml-5 p-3">
          <div class="absolute inset-y-0 left-0 flex items-center">
            <label for="product" class="sr-only">product</label>
            <select id="product" name="product" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 font-black text-lg focus:ring-2 focus:ring-inset focus:ring-indigo-600 select-name-product">
              <option>Кофе</option>
              <option>Десерт</option>
            </select>
            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
        <p class="mt-1 ml-5 text-sm leading-6 text-gray-600">Введите название <span class="name-product">напитка</span>, добавьте фото и описание.</p>
        <form class="coffee-form">
          <div class="p-8">
            <div class="border-b border-gray-900/10 pb-12">

        
              <div class="sm:col-span-4 my-8 text-center">
                <label for="coffee" class="block text-sm font-medium leading-6 text-gray-900">Название</label>
                <div class="mt-2">
                  <div class="flex mx-auto rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="coffee" id="coffee" class="block flex-1 border-0 bg-white py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 title" placeholder="Название напитка">
                  </div>
                </div>
              </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="p-6 text-gray-900">
                          <div class="col-span-full">
                              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
                              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                  <div class="img-previou">
                                  </div>
                                  <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                      <span>Upload a file</span>
                                      <input id="file-upload" name="file-upload" type="file" class="sr-only file-input">
                                    </label>
                                  </div>
                                  <p class="text-xs leading-5 text-gray-600">PNG, JPG</p>
                                </div>
                              </div>
                      </div>
                  </div>
                </div>
        
                <div class="col-span-full my-4">
                  <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Описание</label>
                  <div class="mt-2">
                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 description"></textarea>
                  </div>
                  <p class="mt-3 text-sm leading-6 text-gray-600" style="color: red">Правила ввода текста которы я еще не придумал!</p>
                </div>
    
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
          </div>
        </form>
</x-app-layout>
