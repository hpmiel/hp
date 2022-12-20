@props([
    'type' => 'a', // a | submit
    'href' => '#',
    'color' => 'primary',  // primary | secondary|  info | danger | warning
    'light' => true,
    'size' => 'sm'  // xs | sm | lg
])
@php
    $colorClass = $light ? 'btn-light-' . $color : 'btn-'. $color;
@endphp

@if($type === 'a')
    <a
        {{ $attributes->merge(['class' => 'btn '. $colorClass . ' btn-'.$size]) }}
        href="{{ $href }}"
    >
        {{ $slot }}
    </a>
@elseif($type === 'submit')
    <button
        {{ $attributes->merge(['class' => 'btn '. $colorClass]) }}
    >
        {{ $slot }}
    </button>
@endif
