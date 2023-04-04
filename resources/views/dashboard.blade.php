<x-layout>
    @if ($movies)
        @foreach ($movies as $movie)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3 w-30">
            <table class="w-20 text-sm text-left text-gray-500 dark:text-gray-400 ">
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 flex items-center">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$movie->title}}
                            <img src="/storage/{{$movie->thumbnail}}" alt="" width="50px"/>
                        </th>
                        <td class="px-6 py-4">
                            <form action="/movies/movie/{{$movie->slug}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <a href="/movies/movie/{{$movie->slug}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    @endif

</x-layout>