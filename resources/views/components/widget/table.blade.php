@props([])

<div class="table-responsive">
    <table
        {{ $attributes->merge([
                'class' => 'table table-striped table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 text-center mb-0'
                ]) }}
    >
        <thead>
        <tr class="fw-bold text-muted bg-light">
            {{ $th }}
        </tr>
        </thead>
        <tbody>
        {{ $slot }}
        </tbody>
    </table>
</div>

