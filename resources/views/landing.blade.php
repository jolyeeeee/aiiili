<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-400 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-2xl w-full bg-purple-200 p-12 border-4 border-black shadow-[8px_8px_0_0_#000] transform -rotate-1">
        <div class="flex justify-center items-center h-screen">
            <h1 class="text-4xl md:text-5xl font-black mb-6 bg-yellow-300 p-4 border-4 border-black shadow-[4px_4px_0_0_#000] inline-block w-auto transform rotate-2 text-center" style="font-family: 'Dancing Script', cursive;">
                welcomeee </br> to the todoweb
            </h1>
        </div>
        
        <div class="flex justify-center items-center">
            <p class="text-xl font-bold mb-8 bg-white p-4 border-4 border-black shadow-[4px_4px_0_0_#000] transform -rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                atur jadwal kamu.
            </p>
        </div>
        
        
        
        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
            <a href="{{ route('register') }}" 
               class="bg-purple-600 text-white px-8 py-4 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold text-lg transform rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                Daftar Sekarang
            </a>
            
            <a href="{{ route('login') }}" 
               class="bg-purple-400 text-white px-8 py-4 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold text-lg transform -rotate-1 text-center" style="font-family: 'Dancing Script', cursive;">
                Login
            </a>
        </div>
    </div>
</body>
</html>