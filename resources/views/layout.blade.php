<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapor.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <aside class="w-64 bg-white h-screen shadow-2xl fixed top-0 left-0 z-[9999] border-r">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-blue-600 italic">Rapor.id</h1>
        </div>
        <nav class="mt-6 space-y-2 px-4">
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 rounded-xl transition-all {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
                <span class="mr-3">📊</span> Dashboard
            </a>
            <a href="{{ route('siswa') }}" 
               class="flex items-center px-4 py-3 rounded-xl transition-all {{ request()->is('siswa') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
                <span class="mr-3">👤</span> Siswa
            </a>
            <a href="{{ route('guru') }}" 
               class="flex items-center px-4 py-3 rounded-xl transition-all {{ request()->is('guru') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
                <span class="mr-3">👨‍🏫</span> Guru
            </a>
            <a href="{{ route('mapel') }}" 
               class="flex items-center px-4 py-3 rounded-xl transition-all {{ request()->is('mapel') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
                <span class="mr-3">📚</span> Mata Pelajaran
            </a>
        </nav>
    </aside>

    <div class="ml-64 min-h-screen flex flex-col relative z-10">
        <header class="bg-white shadow-sm p-4 flex justify-end items-center space-x-4 sticky top-0 z-30 border-b">
            <div class="text-right">
                <p class="text-sm font-bold text-gray-800">Profile </p>
                <a href="{{ route('login') }}" class="text-red-500 text-xs font-bold">Logout</a>
            </div>
            <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">TU</div>
        </header>

        <main class="p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>