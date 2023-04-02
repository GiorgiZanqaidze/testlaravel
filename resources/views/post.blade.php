<x-layout>
{{-- @dd($user->first()) --}}
        

    @foreach ($users as $user)
        <h1 class="mt-6">{{$user->name}}</h1>
    @endforeach

    <a href="/">Home page</a>
</x-layout>