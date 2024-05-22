<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nathanial's Library</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class= "bg-gray-100 dark:bg-gray-900 ">
    

    {{-- nav bar + icon/home button --}}
    
    <nav class="bg-gray-800 shadow">
        <div class="hidden sm:flex sm:items-end sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-indigo-400  transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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
        </div>
        <div class="w-full flex flex-col
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
                                <nav >
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400  border border-solid border-indigo-600  shadow "
                                        >
                                            Dashboard
                                        </a>
                                    @else
                                     
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-l-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400 border border-solid border-indigo-600  shadow "
                                        >
                                            Log in
                                        </a>
                                           
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-r-md px-3 py-2   dark:text-gray-200 dark:hover:text-indigo-400 border border-solid border-indigo-600  shadow "
                                            >
                                                Register
                                            </a>
                                       
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </div>
        </div>
    </nav>

                        
        

    {{-- images + slot +  --}}
    <div class="flex bg-gray-600 justify-between max-w-screen-xl
    relative mx-auto">
        {{-- images left  +hides smaller screens--}}
        <div class="w-1/5 ">
            
            {{-- image left top --}}
            <img class="w-full max-h-32 max-w-32  mx-auto py-3"
                 src="{{ asset('img/soloLearn.png') }}"

                 alt="No image found">

            {{-- Soloearn links --}}
            <a href="https://www.sololearn.com/certificates/CC-HOFBUUPZ" >
            <img src="{{ asset('img/html.jpeg') }}" alt="No image found" class="mx-auto flex flex-gap justify-center py-4 max-h-20 " >
            
            </a>
            
            
                 
        </div>

        {{-- Content --}}
        <div class=" bg-indigo-600 w-3/5 text-gray-200 px-3 py-1.5 ">
            
            <h1>Nathanial's Library</h1>
        <p>
            This site was created and designed around learning the Laravel framework focusing on php, tailwindcss and javascript and was intended to
            be a display site to show what I can currently do.
        </p>

        <p>Currently I am also learning via sololearn and on the left are my certificates I have achieved so far. </p>

        <p>feel free to browse my work via register/login/dashboard</p>


        </div>

        {{-- images right --}}
        <div class=" w-1/5 bg-gray-600 " >
            {{-- image right top --}}
            <img class="w-full max-h-32 max-w-32  mx-auto py-3"
                 src="{{ asset('img/udemy.png') }}"

                 alt="Place holder">
            {{-- image right bottem --}}
            <a href="#"  class="mx-auto flex flex-gap justify-center py-4 text-indigo-400">
                Coming soon
                </a>
        </div>
    </div>

    
    

    <!-- This div will be fixed at the bottom -->
    <div class="bottom-0 fixed w-full  max-h-28 ">
        
        <div class="w-full bg-gray-500 min-h-[150px] h-full">

            <h3 class="text-white pt-3 px-3">
                Contact:
            </h3>

            <p class="text-white px-3 py-1.5">
                Cellphone: 0662116260
            </p>
            <p class="text-white  px-3 py-1.5">
                Email: natwork102@gmail.com
            </p>
    </div>
    

    

  
</body>



</html>
