<x-layout>
       @if ($movie)
              <div class="flex justify-center items-center flex-col">
                     <a href="quotes/{{$movie->slug}}" class="text-center m-20">{{$movie->title}}</a>
                     <img src="/storage/{{ $movie->thumbnail }}" alt="" class="w-40"/>
              </div>
       @endif
</x-layout>