<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraCasts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div class="flex px-10 py-5 items-center mb-10 border-b border-white/10">
        <div>
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
        </div>
        <nav class="space-x-3 ms-5">
            <x-nav-link href="/"> Home </x-nav-link>
            <x-nav-link href="/about"> About </x-nav-link>
            <x-nav-link href="/contact"> Contact </x-nav-link>
        </nav>
        <div class="ms-auto">
            <x-link-btn> Create </x-link-btn>
        </div>
    </div>
    <main class="max-w-[986px]">
        {{ $slot }}
    </main>
</body>
</html>
