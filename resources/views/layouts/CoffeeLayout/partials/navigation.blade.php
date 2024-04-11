<nav class="coffee__nav">
  <div class="coffee__nav-inner">
    <button type="button" class="btn close__nav">
      <i class="bi bi-x-lg"></i>
    </button>
    <ul class="coffee__nav-list">
      <li>
        <x-nav.link :href="route('main')" :active="request()->routeIs('main')" class="coffee__nav-link">
          Главная
        </x-nav.link>
      </li>
      <li>
        <x-nav.link :href="route('menu')" :active="request()->routeIs('menu')" class="coffee__nav-link">
          Меню
        </x-nav.link>
      </li>
      <li>
        <x-nav.link :href="route('about')" :active="request()->routeIs('about')" class="coffee__nav-link">
          О нас
        </x-nav.link>
      </li>
    </ul>

  </div>
</nav>