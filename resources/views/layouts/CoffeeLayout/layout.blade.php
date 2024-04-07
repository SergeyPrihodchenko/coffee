<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  @include('layouts.CoffeeLayout.partials.header')
  
  <main>
    @yield('content')    
  </main>
  
  <script src="{{ asset('js/header.js') }}"></script>
  @yield('scripts')
</body>
</html>