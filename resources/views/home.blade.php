<!DOCTYPE html>

<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>library</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900">
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
        <p class="text-cyan-500 flex justify-center p-10" >test</p>
    </div>

    



</body>

</html>





{{-- <div class="flex " >
    <div class="flex lg:justify-center lg:col-start-2 w-full py-5 border border-solid ">
        <a href="home">
            <x-book-logo class="w-[100px] h-[100px] fill-current text-gray-500" />
        </a>

    </div>
    <div class="py-12" >
        <x-loginReg />

    </div>


</div> --}}


{{-- full body div
<div class="max-w-screen-x1 mx-auto h-screen w-full bg-green-600">
    banner div
    <div class="relative flex h-28 w-full flex-wrap items-center justify-between bg-black px-6 py-6 md:pl-0">
        button right
        <div
             class=" mx-auto xs:bg-blue h-full w-48 border border-solid border-purple-700
              bg-blue-700 sm:bg-fuchsia-600 md:bg-yellow-400 lg:bg-black xl:bg-rose-700">
        </div>
        button left
        <div class="right-6 h-12 w-48 bg-amber-400 sm:absolute"></div>
    </div>
</div> --}}



