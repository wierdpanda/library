<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- top nav bar --}}
    <nav class="w-full fixed top-0 h-28 bg-gray-800 p-4  px-6 flex items-center justify-center shadow-sm">
        {{-- div to cap width of child components --}}
        <div class="w-full max-w-screen-xl h-full bg-transparent flex items-center justify-between">
            {{-- logo on left --}}
            <a href="/" class="flex items-center h-full gap-3">
                <x-book-logo class="h-full aspect-square fill-current text-gray-400 " />
                <span class="text-3xl text-white"> {{ __('Library') }} </span>

            </a>

            {{-- profile drop down on right --}}
            <div class="h-full py-2 relative">
                <x-icon.defaultProfile
                    id="profile-dropdown-toggle"
                    class="h-full aspect-square  bg-gray-200 rounded-full text-gray-300 shadow-sm cursor-pointer "
                    dropdown-opened="false"
                    />
                {{-- dropdown --}}
                <div
                id="profile-dropdown"
                class="py-3 bg-gray-700 border border-indigo-600 shadow absolute rounded top-full right-0 hidden"
                >
                    {{-- name and email --}}
                    <div class="w-full border-b border-indigo-600 text-gray-300 px-6 pb-1">
                        <span class="text-gray-200"> {{ __('nat') }} </span>
                        <span> {{ __('nat102@gmail.com') }} </span>
                    </div>
                    {{-- logout --}}
                    <a href="# " class="w-full py-3 block text-gray-300 px-6  hover:bg-gray-600">
                        {{ __('Logout') }}
                    </a>
                    {{-- profile --}}
                    <a href="# " class="w-full py-3 block text-gray-300 px-6  hover:bg-gray-600">
                        {{ __('Profile') }}
                    </a>




                </div>

            </div>
        </div>


    </nav>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</body>

</html>
