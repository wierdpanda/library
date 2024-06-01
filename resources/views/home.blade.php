<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nathanial's Library</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class= "bg-gray-100 dark:bg-gray-900  xs:overflow-y-scroll  xs:overflow-y-hidden pb-[200px]">


    {{-- profile and logout dropdown --}}

    <nav class="bg-gray-800 shadow" aria-label="profile and logins">
        <div class="w-full
        py-3 sm:px-12
        
        max-w-screen-xl
        relative mr-auto">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                                class="inline-flex items-center px-3 py-2
                        border border-transparent
                        text-sm leading-4 font-medium
                        rounded-md
                        dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-indigo-400
                        transition ease-in-out duration-150">
                            {{-- ?? '' means if user name does not exist take to home page --}}
                            <div>{{ Auth::user()->name ?? '' }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth
        </div>
        {{-- nav bar + icon/home button  --}}
        <div
             class="w-full flex flex-col
         items-center justify-center
         py-3 sm:flex-row sm:justify-between sm:px-12
         lg:justify-center max-w-screen-xl
         relative mx-auto
         ">
            <a href="/">
                <x-book-logo class="block h-28 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
            <div class=" max-w-fit lg:absolute lg:right-3 ">
                @if (Route::has('login'))
                    <nav>
                        @auth
                            <a
                               href="{{ url('/dashboard') }}"
                               class="rounded-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400  border border-solid border-indigo-600  shadow ">
                                Dashboard
                            </a>
                        @else
                            <a
                               href="{{ route('login') }}"
                               class="rounded-l-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400 border border-solid border-indigo-600  shadow ">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                   href="{{ route('register') }}"
                                   class="rounded-r-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400 border border-solid border-indigo-600  shadow ">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>




    {{-- center div  --}}
    <div class=" flex justify-center items-center max-w-screen-xl
    relative mx-auto mt-10   ">


        {{-- Content --}}
        <div class=" bg-gray-600 w-3/5 text-gray-200 px-3 py-1.5  ">

            <h1>Nathanial's Library</h1>
            <br>
            <p>
                This site was created and designed around learning the Laravel framework focusing on php, tailwindcss
                and javascript and was intended to
                be a display site to show what I can currently do.
            </p>
            <p>feel free to browse my work via register/login/dashboard</p>
            <p>The login sytem and profile edit/delete is the laravel/breeze built in feature</p>
            <br>
            <p>Currently I am also learning via sololearn and udemy and below are my certificates I have achieved so
                far.
            </p>

        </div>


    </div>
    {{-- certificates --}}
    {{-- make  popup  in middle of sceen (modal) for when course links are not ready yet --}}
    <div class="max-w-screen-xl flex justify-center w-full mx-auto">

        <div class="w-3/5 flex justify-between  mt-10 background-div mx-auto ">
            <div>
                {{-- sololearn Certificates --}}
                <div class="text-indigo-600  flex gap-3 items-center">
                    <x-icon.sololearn class="w-10 h-10 text-indigo-600 " />
                    <p>SoloLearn Certificates</p>
                </div>
                {{-- HTML --}}
                <a href="https://www.sololearn.com/certificates/CC-HOFBUUPZ"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center" target="_blank">

                    <x-icon.html5 class="w-10 h-5 " />
                    <p>HTML5</p>
                </a>
                {{-- JS intro --}}
                <a href="#"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center"
                   onclick="window.linkNotReady()">
                    <x-icon.javascript class="w-10 h-5 text-indigo-600 " />
                    <p>javascript introduction</p>
                </a>
                {{-- JS intermediate --}}
                <a href="#"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center"
                   onclick="window.linkNotReady()">
                    <x-icon.javascript class="w-10 h-5 text-indigo-600 " />
                    <p>javascript intermediate</p>
                </a>
                {{-- CSS --}}
                <a href="#"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center"
                   onclick="window.linkNotReady()">
                    <x-icon.css class="w-10 h-5 text-indigo-600 " />
                    <p>Cascading Style Sheets</p>
                </a>
                {{-- PHP --}}
                <a href="#"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center"
                   onclick="window.linkNotReady()">
                    <x-icon.php class="w-10 h-5 text-indigo-600 " />
                    <p>PHP: Hypertext Preprocessor</p>
                </a>
            </div>
            {{-- UDEMY Certificates --}}
            <div>
                <div class="text-indigo-600  flex gap-3 items-center">
                    <x-icon.udemy class="w-10 h-10 text-indigo-600  " />
                    <p>Udemy Certificates</p>
                </div>
                {{-- Laravel --}}
                <a href="#"
                   class="text-indigo-600 hover:text-indigo-500 flex gap-3 items-center"
                   onclick="window.linkNotReady()">


                    <x-icon.laravel class="w-10 h-5 " />
                    <p>Laravel still in progress</p>


                </a>


            </div>

        </div>
    </div>


    <!-- This div will be fixed at the bottom -->
    <div class="bottom-0 fixed w-full  max-h-28 flex justify-evenly bg-gray-600 ">

        <div class="w-full max-w-[250px] bg-gray-600 min-h-[150px] h-full ">

            <h3 class="text-gray-200  pt-3 px-3">
                Contact:
            </h3>

            <p class="text-gray-200 px-3 py-1.5">
                Cellphone: 0662116260
            </p>
            <p class="text-gray-200  px-3 py-1.5">
                Email: natwork102@gmail.com
            </p>

        </div>







    </div>


</body>



</html>
