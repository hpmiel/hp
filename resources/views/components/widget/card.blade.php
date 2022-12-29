@props([
    'padding' => '',
    'header' => '',
    'header_toolbar' => null,
])

<div class="card border border-2 border-secondary">

    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            {{ $header }}
        </h3>
        <div class="card-toolbar">
            {{ $header_toolbar }}
        </div>
    </div>

    <div class="card-body
                @if($padding !== '') {{ $padding }} @endif
                @if($padding === false) p-0 @endif
                ">
        {{ $slot }}
    </div>
</div>
