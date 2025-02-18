<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-400 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white p-8 border-4 border-black shadow-[8px_8px_0_0_#000] transform -rotate-1">
        <h2 class="text-3xl font-black mb-8 bg-yellow-300 p-4 border-4 border-black shadow-[4px_4px_0_0_#000] text-center transform rotate-2">
            Form Registrasi
        </h2>

        @if (session('success'))
            <div class="bg-green-200 p-4 mb-6 border-4 border-black transform rotate-1 shadow-[4px_4px_0_0_#000]">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-lg font-black mb-2 bg-purple-200 p-2 border-2 border-black inline-block transform -rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                    Nama
                </label>
                <input type="text" 
                       name="name" 
                       class="w-full p-3 border-4 border-black focus:ring-4 focus:ring-yellow-300 outline-none text-lg bg-white"
                       required>
                @error('name')
                    <div class="text-red-500 font-bold mt-2 bg-red-100 p-2 border-2 border-black">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-lg font-black mb-2 bg-purple-200 p-2 border-2 border-black inline-block transform rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                    Email
                </label>
                <input type="email" 
                       name="email" 
                       class="w-full p-3 border-4 border-black focus:ring-4 focus:ring-yellow-300 outline-none text-lg bg-white"
                       required>
                @error('email')
                    <div class="text-red-500 font-bold mt-2 bg-red-100 p-2 border-2 border-black">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-lg font-black mb-2 bg-purple-200 p-2 border-2 border-black inline-block transform -rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                    Password
                </label>
                <input type="password" 
                       name="password" 
                       class="w-full p-3 border-4 border-black focus:ring-4 focus:ring-yellow-300 outline-none text-lg bg-white"
                       required>
                @error('password')
                    <div class="text-red-500 font-bold mt-2 bg-red-100 p-2 border-2 border-black">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-lg font-black mb-2 bg-purple-200 p-2 border-2 border-black inline-block transform rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                    Konfirmasi Password
                </label>
                <input type="password" 
                       name="password_confirmation" 
                       class="w-full p-3 border-4 border-black focus:ring-4 focus:ring-yellow-300 outline-none text-lg bg-white"
                       required>
            </div>

            <button type="submit" 
                    class="w-full bg-purple-600 text-white py-4 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold text-lg transform rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                Daftar
            </button>

            <div class="text-center font-bold mt-6 bg-yellow-100 p-4 border-4 border-black transform -rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                Sudah punya akun? 
                <a href="/login" 
                   class="text-purple-600 underline decoration-4 decoration-black hover:bg-yellow-300 transition-colors">
                    Login
                </a>
            </div>
        </form>
    </div>
</body>
</html>