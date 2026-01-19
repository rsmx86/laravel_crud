<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-orange-600 border border-transparent rounded-lg font-bold text-sm text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-800 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-zinc-900 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
