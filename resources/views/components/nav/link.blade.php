
@php
$classes = ($active ?? false)
            ? 'text-purple-500'
            : 'text-[#242424]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
