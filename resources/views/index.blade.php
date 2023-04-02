<x-layout>
       @if ($quote)
              <div class="flex justify-center items-center flex-col">
                     <p class="text-center m-20">{{$quote->name}}</p>
                     <img src="/storage/{{ $quote->thumbnail }}" alt="" class="w-40"/>
              </div>
       @endif
</x-layout>