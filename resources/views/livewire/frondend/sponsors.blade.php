<div class="mx-auto lg:mx-0 grid col-span-5 md:grid-cols-5 grid-cols-3 gap-8">
    @foreach ($sponsors as $sponser)
        <a href="{{ $sponser->url }}" target="_blank" class="flex justify-center">
            <img class="max-h-24" src="{{ asset($sponser->getImage() )}}" alt="{{ $sponser->name }}">
        </a>
    @endforeach
</div>
