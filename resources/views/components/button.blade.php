
@props(['href', 'type' => 'primary'])

@php
    $colors = [
        'view' => 'btn-info text-white',
        'edit' => 'btn-warning',
        'success' => 'btn-success',
        'secondary' => 'btn-secondary'
    ];
    $class = $colors[$type] ?? 'btn-primary';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "btn btn-sm $class"]) }}>
    {{ $slot }}
</a>