<a href="{{ $href }}"
   aria-current="{{ $active ? 'page' : 'false' }}"
    @class([
        "rounded-md px-3 py-2 text-sm font-medium",
        "bg-gray-900 text-white" => $active,
        "text-gray-300 hover:bg-gray-700 hover:text-white" => !$active,
    ])
>
    {{ $name }}
</a>
