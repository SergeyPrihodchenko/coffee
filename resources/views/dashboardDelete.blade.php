<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панелька добавления') }}
        </h2>
    </x-slot>
    <h3>{{!empty($status) ? $status : ''}}</h3>
    <div class="">
      <div class="relative mb-5 mt-2.5 ml-5 p-3">
        <div class="absolute inset-y-0 left-0 flex items-center border-3">
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
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">название</th>
            <th scope="col">изображение</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="coffee-tbody">
          @foreach ($coffees as $coffee)
          <tr>
            <td>{{$coffee['title']}}</td>
            <td><img width="200" height="200" src="{{asset($coffee['img'])}}" class="img-thumbnail" alt="..."></td>
            <td><a href="admin/product/deleteCoffee/{{$coffee['id']}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
          @endforeach
        </tbody>
        <tbody class="sweet-tbody display-hiden">
          @foreach ($sweets as $sweet)
          <tr>
            <td>{{$sweet['title']}}</td>
            <td><img width="200" height="200" src="{{asset($sweet['img'])}}" class="img-thumbnail" alt="..."></td>
            <td><a href="admin/product/deleteSweet/{{$sweet['id']}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</x-app-layout>
@vite('resources/js/dashboardDelete.js')
