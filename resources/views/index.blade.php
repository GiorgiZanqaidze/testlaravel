<x-layout>
       

       @foreach ($users as $user)
              <p>{{$user->name}}</p>
       @endforeach
       <a href="/posts/post">new post</a>
</x-layout>