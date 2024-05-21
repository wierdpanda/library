<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Library') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            </div>
        </div>
    </div>

    <div class="mx- text-teal-400">
        @php
            $z = 50;
            $z -= 100;
            echo "$z</br>";

            $a = 2;
            $b = $a++; // $a=3,  $b=2
            echo "a=$a</br>b=$b";
            echo "</br>";
            $a = 2;
            $b = ++$a; // $a=3,  $b=3
            echo "a=$a</br>b=$b";

        @endphp

        <h2 style="font-family: Times New Roman; background-color:red"> testing</h2>

        <table class="border border-double">
            <tr class="border border-double">
                <td class="border border-double">Key 1</td>
                <td class="border border-double">105</td>
             </tr>
             <tr class="border border-double">
                <td class="border border-double">Key 2</td>
                <td>205</td>
             </tr> 
        </table>
    </div>
</x-app-layout>
