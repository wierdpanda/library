<!DOCTYPE html>
<html
    class="dark"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >
        <meta
            name="csrf-token"
            content="{{ csrf_token() }}"
        >

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net"
            rel="preconnect"
        >
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class=" bg-white shadow dark:bg-gray-800">
                    <div class="mx-auto  max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>

                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <p class="text-cyan-300">Currently the delete button and the search engine are still being worked on</p>
                    </div>
                    

                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="mx-auto max-w-7xl pt-12 sm:px-6 lg:px-8">
                    {{-- alert message --}}
                    @if (session()->has('success'))
                        <x-alert type="success">
                            {{ session()->get('success') }}
                        </x-alert>
                    @endif
                </div>

                {{ $slot }}
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>

</html>
