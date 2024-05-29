<article class="bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-500 rounded-lg mb-4 last-of-type:mb-0">
    <div class="relative">
        <div class="absolute bg-orange-500 block size-20 right-0 text-center text-lg text-white top-0 rounded-tr-lg rounded-bl-lg">
            <p class="text-3xl font-extrabold">{{ $post->published_at->format('d') }}</p>
{{--            <p class="text-sm">{{ $post->published_at->format('M') }}</p>--}}
            <p class="text-xs">December</p>
            <p class="text-xs">{{ $post->published_at->format('Y') }}</p>
        </div>
    </div>
    <div class="p-4">
        <div class="flex justify-between items-center mb-2 text-xs text-gray-500">
            <div class="flex">
                <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                      Tutorial
                </span>
{{--                @foreach($post->categories as $category)--}}
{{--                    <x-badges.default wire:navigate href="{{ route('posts.index', ['category' => $category->slug]) }}" :Color="$category->color">{{ $category->title }}</x-badges.default>--}}
{{--                @endforeach--}}
            </div>
        </div>

        <div class="mb-4">
            <a wire:navigate href="{{ route('posts.show', $post->id) }}" class="font-bold text-2xl text-gray-900 dark:text-white hover:text-orange-500 dark:hover:text-orange-500 focus:outline-none focus:text-orange-500 dark:focus:text-orange-500 transition duration-150 ease-in-out">
                {{ $post->title }}
            </a>
        </div>
        <div class="mb-4 flex flex-wrap font-normal text-gray-700 dark:text-gray-400">
            {!! $post->shortBody() !!}
        </div>
    </div>
    <footer class="flex justify-between items-center p-4">
        <div class="flex items-center space-x-4">
            <img class="h-7 w-7 rounded-full object-cover" src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->username }}" />
            <span class="text-sm font-medium dark:text-white">{{ $post->user->username }}</span>
        </div>
        <a href="{{ route('posts.show', $post->id) }}" class="flex items-center text-sm text-orange-500 hover:underline focus:outline-none focus:underline">
            Read More
            <x-heroicon-o-arrow-right-circle class="ml-2 size-5"/>
        </a>
    </footer>
</article>
