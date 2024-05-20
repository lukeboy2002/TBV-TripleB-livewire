@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-orange-500 text-start text-base font-medium text-orange-500 dark:text-white bg-orange-50 dark:bg-gray-600 focus:outline-none focus:text-orange-600 focus:bg-orange-100 focus:border-orange-600 transition duration-150 ease-in-out'
                : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-700 dark:text-white hover:text-gray-800 dark:hover:text-white hover:bg-orange-50 dark:hover:bg-gray-600 hover:border-orange-500 focus:outline-none focus:text-gray-800 focus:bg-orange-50 focus:border-orange-500 transition duration-150 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
