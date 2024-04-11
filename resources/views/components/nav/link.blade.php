
@php
$classes = ($active ?? false)
            ? 'text-[#eeb30f]'
            : 'text-[#242424]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
