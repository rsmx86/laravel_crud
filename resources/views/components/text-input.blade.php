@props(['disabled' => false])

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-zinc-950 border-zinc-800 text-zinc-100 focus:border-orange-900 focus:ring-orange-500 rounded-lg shadow-sm w-full p-3 transition']) !!}>
