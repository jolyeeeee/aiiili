<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'To-Do List App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-200 font-sans">
    <div class="container mx-auto px-4 mt-20 max-w-4xl">
        <!-- Header dengan rotasi dan shadow khas neobrutalism -->
        <h2 class="text-4xl md:text-5xl font-black text-center text-pink-500 transform -rotate-2 mb-8 
                   tracking-wider uppercase bg-white p-4 border-4 border-black shadow-[8px_8px_0_0_#000]">
            @yield('header')
        </h2>

        <!-- Alert Messages dengan style neobrutalism -->
        @if(session('success'))
            <div class="bg-green-200 p-4 mb-6 border-4 border-black transform rotate-1 
                        shadow-[6px_6px_0_0_#000] transition-transform hover:translate-x-1">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-200 p-4 mb-6 border-4 border-black transform -rotate-1 
                        shadow-[6px_6px_0_0_#000] transition-transform hover:translate-x-1">
                {{ session('error') }}
            </div>
        @endif

        <!-- Content Section -->
        <div class="bg-white p-6 border-4 border-black shadow-[8px_8px_0_0_#000]">
            @yield('content')
        </div>

        <!-- Footer dengan style neobrutalism -->
        <footer class="mt-12 mb-8">
            <div class="bg-white p-6 border-4 border-black shadow-[8px_8px_0_0_#000] transform -rotate-1">
                <hr class="border-t-4 border-black my-4">
                <p class="text-center font-bold text-lg">
                    &copy; {{ date('Y') }} To-Do List App - Dibuat dengan Laravel
                </p>
            </div>
        </footer>
    </div>
</body>
</html>