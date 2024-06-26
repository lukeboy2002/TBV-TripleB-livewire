<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50 dark:bg-gray-800">
        <x-banner />
        <x-header />
        @livewire('navigation-menu')
        <div class="min-h-screen">
            <!-- Page Heading -->
            @if (isset($hero))
                <div class="bg-gray-50 dark:bg-gray-700 shadow">
                    <div class="w-full mx-auto">
                        {{ $hero }}
                    </div>
                </div>
            @endif

            <!-- Page Content -->
            @if (isset($side))
            <div class="max-w-7xl mx-auto flex flex-wrap py-10 sm:px-6 lg:px-8">
                <main class="w-full md:w-3/4 flex flex-col px-3">
                    {{ $slot }}
                </main>
                <aside class="w-full md:w-1/4 flex flex-col px-3">
                    <slot name="side" />
                </aside>
            </div>
            @else
            <main class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
            @endif
        </div>
        <x-footer />
        @stack('modals')

        @livewireScripts
    </body>
</html>
