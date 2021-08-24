@props(['active'])

@php
    $classes = ($active ?? false) ? 'btn active' : 'btn';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
