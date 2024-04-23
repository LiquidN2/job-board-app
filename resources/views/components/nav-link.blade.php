@props(['path' => ''])

@php
    $active = false;
    if (empty($path) && request()->is('/')) {
        $active = true;
    } elseif (request()->is($path) || request()->is($path . "/*")) {
        $active = true;
    }

    $class = "rounded-md px-3 py-2 text-sm font-medium " . ($active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white")
@endphp

<a href="/{{ $path }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
