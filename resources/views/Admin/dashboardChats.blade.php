<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панелька чатов') }}
        </h2>
    </x-slot>
      @if (!empty(session('status')))
          <h3 class="status-for-delete alert alert-primary" role="alert">{{session('status')}}</h3>
      @endif
        @dd($messages);
</x-app-layout>
@vite('resources/js/dashboardChats.js')
