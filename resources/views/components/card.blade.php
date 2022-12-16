@props([
    'header' => ''
])

<div class="card p-5">
    <div class="card-header">
        {{ $header }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
