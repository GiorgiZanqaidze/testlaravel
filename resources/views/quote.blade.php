<x-layout>
    <div class="flex justify-center items-center flex-col">
        <h1>{{$movie->title}}</h1>
        @foreach ($movie->quotes as $quote)
            <p class="text-center m-20">{{$quote->name}}</p>
            <img src="/storage/{{ $movie->thumbnail }}" alt="" class="w-40"/>
        @endforeach
    </div>
</x-layout>
            