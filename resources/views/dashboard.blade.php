<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Dashboard') - SibebasTelu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-700 font-sans leading-relaxed">

    {{-- Header --}}
    <header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="text-3xl font-extrabold text-gray-900 tracking-tight select-none">
                SibebasTelu
            </a>
            <nav class="space-x-6 text-gray-600 font-medium text-lg">
                <a href="{{ route('dashboard') }}" class="hover:text-orange-600 transition">Dashboard</a>
                <a href="#" class="hover:text-orange-600 transition">Profile</a>
                <a href="#" class="hover:text-orange-600 transition">Settings</a>
            </nav>
        </div>
    </header>

    {{-- Content --}}
    <main class="pt-24 pb-20 max-w-7xl mx-auto px-6">
        @yield('content')
    </main>

</body>
</html>
