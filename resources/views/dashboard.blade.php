<x-layout>
    @if ($quotes)
        @foreach ($quotes as $quote)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-20">
            <table class="w-20 text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 flex items-center">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$quote->name}}
                            <img src="/storage/{{$quote->thumbnail}}" alt="" width="50px"/>
                        </th>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @endforeach
    @endif

</x-layout>