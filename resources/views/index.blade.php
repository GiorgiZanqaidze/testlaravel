<x-layout>
       @if ($quote)
              <div class="flex justify-center items-center flex-col">
                     <a href="quotes/{{$quote->slug}}" class="text-center m-20">{{$quote->name}}</a>
                     <img src="/storage/{{ $quote->thumbnail }}" alt="" class="w-40"/>
              </div>
       @endif
</x-layout>