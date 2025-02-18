<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Neobrutalism</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .neo-border {
            box-shadow: 8px 8px 0 0 #000;
        }
        .neo-button {
            box-shadow: 5px 5px 0 0 #000;
            transition: all 0.2s ease;
        }
        .neo-button:hover {
            transform: translate(-2px, -2px);
            box-shadow: 7px 7px 0 0 #000;
        }
        .neo-input {
            box-shadow: 4px 4px 0 0 #000;
        }
    </style>
</head>

<body class="bg-purple-400 min-h-screen flex items-center justify-center p-4">
<img src="1.jpg">

    <div class="bg-purple-200 p-8 border-4 border-black neo-border max-w-md w-full">
        <h2 class="text-4xl font-black text-center mb-8 text-black">Form Login</h2>

        @if (session('success'))
            <div class="bg-green-300 border-2 border-black p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-300 border-2 border-black p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-2xl font-bold mb-2 text-black " style="font-family: 'Dancing Script', cursive;">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="w-full p-3 bg-white border-2 border-black neo-input focus:outline-none focus:ring-0 focus:border-black" 
                    required
                >
            </div>

            <div>
                <label class="block text-2xl font-bold mb-2 text-black " style="font-family: 'Dancing Script', cursive;">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="w-full p-3 bg-white border-2 border-black neo-input focus:outline-none focus:ring-0 focus:border-black" 
                    required
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-yellow-300 text-black font-bold text-xl p-3 border-2 border-black neo-button hover:bg-blue-500 transition-all"
            >
                Login
            </button>

            <div class="text-center" style="font-family: 'Dancing Script', cursive;">
                Belum punya akun? 
                <a href="/register" class="text-blue-700 underline decoration-2 decoration-black hover:text-blue-800">
                    Register
                </a>
            </div>
        </form>
    </div>
</body>
</html>