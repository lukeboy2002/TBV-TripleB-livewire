<x-app-layout>
    <x-slot name="hero">
        <img src="{{asset('storage/hero/dashboard.jpg')}}" class="h-40 md:h-56 overflow-hidden lg:h-72 w-full object-cover" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
