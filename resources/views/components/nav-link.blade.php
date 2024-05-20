{{--@props(['active'])--}}

{{--@php--}}
{{--$classes = ($active ?? false)--}}
{{--            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'--}}
{{--            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';--}}
{{--@endphp--}}

{{--<a {{ $attributes->merge(['class' => $classes]) }}>--}}
{{--    {{ $slot }}--}}
{{--</a>--}}

@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center text-white bg-orange-500 hover:bg-orange-600 focus:ring-1 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2 my-3 focus:outline-none transition duration-150 ease-in-out'
                : 'inline-flex items-center dark:text-white bg-gray-200 dark:bg-gray-600 hover:bg-orange-500 dark:hover:bg-orange-500 focus:ring-1 focus:ring-orange-100 font-medium rounded-lg text-sm px-5 py-2 my-3 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
