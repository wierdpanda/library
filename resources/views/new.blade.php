<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body class= "bg-gray-100 dark:bg-gray-900">

    <h2 class="flex justify-center text-green-400">all 4 h2 use text-cyan-400 tailwind class color </h2>


    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a
                                   href="{{ url('/dashboard') }}"
                                   class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a
                                   href="{{ route('login') }}"
                                   class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                       href="{{ route('register') }}"
                                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif

                    <div class="flex lg:justify-center lg:col-start-2">
                        <a href="/">
                            <x-book-logo class="w-[100px] h-[100px] fill-current text-gray-500" />
                        </a>
                    </div>
                    {{-- full body div --}}
    <div class="max-w-screen-x1 mx-auto h-screen w-full">
        {{-- banner div --}}
        <div
             class="
                    relative
                    h-28
                    w-full
                    flex flex-wrap
                    items-center
                    justify-between
                    
                    bg-gray-100 dark:bg-gray-900
                    px-6
                    py-6
                    md:justify-center
                    md:pl-0
                    
                    ">
            {{-- logo/homepage --}}
            <div
                 class="
                 mx-auto
                 
                 flex
                 justify-center
                 items-center
                 border-2
                 border-slate-600
                 rounded-full
                 h-[120px]
                 w-[120px]
                
                 ">
                <a href="home">
                    <x-book-logo class="w-[100px] h-[90px] fill-current text-gray-500" />
                </a>
            </div>
            {{-- login/reg --}}
            <div class="right-96 h-12 w-48 sm:absolute">
                <x-loginReg />
            </div>
        </div>
        <p class="text-cyan-500 flex justify-center p-10">test</p>
        

    </div>

    
</body>
</html>

