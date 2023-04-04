<x-layout>
       @if ($movie)
              <div class="flex justify-center items-center flex-col">
                     <img src="/storage/{{ $movie->thumbnail }}" alt="" class="w-40"/>
                     <a href="movies/{{$movie->slug}}" class="text-center m-20">{{$movie->title}}</a>
                     @if ($movie->quotes->count())
                            <p>{{$movie->quotes->first()->name}}</p>
                     @endif
              </div>
       @endif
</x-layout>
                         