<x-layout>
    <div class="flex justify-center items-center flex-col">
            <p class="text-center m-20">{{$movie->name}}</p>
            <img src="/storage/{{ $quote->thumbnail }}" alt="" class="w-40"/>
    </div>
</x-layout>