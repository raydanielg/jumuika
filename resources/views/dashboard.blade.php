<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased p-6 bg-gray-50">
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="p-4 rounded border bg-white">
                <h1 class="text-lg font-semibold mb-2">Dashboard</h1>
                <p class="text-sm text-gray-600 mb-4">Karibu kwenye dashibodi.</p>
                <div id="app" class="mb-4"></div>
                <livewire:counter />
            </div>
        </div>
        @livewireScripts
    </body>
</html>
