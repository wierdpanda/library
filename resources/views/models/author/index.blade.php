<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">




                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="hidden">Authors table</caption>
                    <thead
                           class="text-xs text-gray-700 uppercase bg-gray-50
                                   dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-2">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Author name
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Updated at
                            </th>
                            <th scope="col" class="px-6 py-2 flex justify-center items-center">
                                <a href="{{ route('authors.create') }}" type="button"
                                   class="focus:outline-none text-white
                                        bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300
                                         font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-indigo-600
                                         dark:hover:bg-indigo-600 dark:focus:ring-purple-900">
                                    Add
                                </a>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50
                                        even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap
                                             dark:text-white">
                                    {{ $author->id }}
                                </th>
                                <td class="px-6 py-2">
                                    {{ $author->name }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $author->created_at }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $author->updated_at }}
                                </td>
                                <td class="px-6 py-2 flex gap-4 justify-center">
                                    <a href="#"
                                       class="font-medium text-indigo-600 dark:text-indigo-600 hover:underline">
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="font-medium text-indigo-600 dark:text-indigo-600 hover:underline">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
            {{-- pagination link  nothing else needs to be done to add the link buttons --}}
            <div class="mt-4">
                {{ $authors->links() }}
            </div>

        </div>
    </div>
</x-app-layout>
