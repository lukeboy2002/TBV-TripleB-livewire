<x-app-layout>
    <x-slot name="hero">
        <img src="{{asset('storage/hero/dashboard.jpg')}}" class="h-40 md:h-56 overflow-hidden lg:h-72 w-full object-cover" />
    </x-slot>

    @foreach($posts as $post)
        <x-article :post="$post"/>
    @endforeach
    <div class="py-6">
        {{ $posts->onEachSide(1)->links() }}
    </div>
</x-app-layout>
