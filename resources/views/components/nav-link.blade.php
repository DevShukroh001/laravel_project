@props(['active' => false, 'type' => 'a'])

@php
    $classes = $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white';

    $classes .= ' rounded-md px-3 py-2 text-sm font-medium';
@endphp

@if ($type === 'button')
    <button class="{{ $classes }}" aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@else
    <a class="{{ $classes }}" aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@endif
