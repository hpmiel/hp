@props([
    'title' => ''
])


<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
    <span class="menu-link">
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        {{ $slot }}
    </div>
</div>
