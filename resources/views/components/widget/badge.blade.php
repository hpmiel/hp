@props([
    'background' => '#50cd89',
    'color' => '#e8fff3',
])

<span class="badge" style="color: {{ $color }};background-color: {{ $background }};">
    {{ $slot }}
</span>
