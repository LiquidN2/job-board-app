@props(['is_link' => false])

@if ($is_link)
    <a
        {{ $attributes->merge(['class' => 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm select-none hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge([
            'class' => 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm select-none hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'
        ]) }}
    >
        {{ $slot }}
    </button>
@endif
