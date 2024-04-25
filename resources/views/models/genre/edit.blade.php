<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Genre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full flex justify-end mb-3">
                <a href="{{ route('genres.index') }}" type="button"
                   class=" text-indigo-700
                            bg-transparent
                            border border-indigo-600
                            hover:bg-purple-800
                            font-medium rounded-lg text-sm
                            px-5 py-2.5">
                    {{ __('<-back') }}
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden  sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Genre Information') }}
                        </h2>


                    </header>



                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <form method="post" action="{{ route('genres.update', $genre->id) }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')


                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                              required autofocus value="{{ $genre->name }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>



                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Update') }}</x-primary-button>


                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
