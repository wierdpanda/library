<button {{ $attributes->merge(['type' => 'submit', 'class' => 'focus:outline-none text-white
    bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300
     font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-indigo-600
     dark:hover:bg-indigo-600 dark:focus:ring-purple-900']) }}>
    {{ $slot }}
</button>
 