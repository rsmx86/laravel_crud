<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel CRUD Notes</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="mb-2">
                <a href="/">
                    <div class="bg-orange-900 p-3 rounded-2xl shadow-lg shadow-orange-600/20">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-zinc-900 border border-zinc-800 shadow-2xl overflow-hidden sm:rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>