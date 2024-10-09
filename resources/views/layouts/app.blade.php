<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased">
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside x-data="{ open: false }" :class="open ? 'w-64' : 'w-18'" class="bg-gray-800 text-white transition-all duration-300 min-h-screen relative">
            <div class="flex justify-between items-center px-6 py-4 bg-gray-900">
                <div x-show="open" class="text-md font-semibold">
                    Menu
                </div>
                <button @click="open = !open" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Sidebar Links -->
            <ul class="mt-4 space-y-2 text-sm">
            <li class="px-6 py-2 flex items-center space-x-4 text-gray-300 hover:text-white">
                <a href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9m0 0l9 9m-9-9v18" />
                </svg></a>
                <span x-show="open"><a href="{{ route('dashboard') }}">Inicio</a></span>
            </li>

                <li class="px-6 py-2 flex items-center space-x-4 text-gray-300 hover:text-white">
                    <a href="{{ route('roles.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h9a2 2 0 002-2v-2m4 0h1.5a1.5 1.5 0 100-3H20m-4 0h4v1m-4 0h4v-1m-4 1h4v1m-4-1h1.5a1.5 1.5 0 000-3H16" />
                    </svg></a>
                    <span x-show="open"><a href="{{ route('roles.index') }}">Roles</a></span>
                </li>

                <li class="px-6 py-2 flex items-center space-x-4 text-gray-300 hover:text-white">
                    <a href="{{ route('users.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h9a2 2 0 002-2v-2m4 0h1.5a1.5 1.5 0 100-3H20m-4 0h4v1m-4 0h4v-1m-4 1h4v1m-4-1h1.5a1.5 1.5 0 000-3H16" />
                    </svg></a>
                    <span x-show="open"><a href="{{ route('users.index') }}">Asignar Rol a Usuario</a></span>
                </li>

                <li class="px-6 py-2 flex items-center space-x-4 text-gray-300 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.28 0 4.14-1.86 4.14-4.14S14.28 3.72 12 3.72 7.86 5.58 7.86 7.86 9.72 12 12 12zm0 2.14c-2.86 0-8.57 1.44-8.57 4.29V20h17.14v-1.57c0-2.85-5.71-4.29-8.57-4.29z" />
                    </svg>
                    <span x-show="open"><livewire:layout.navigation /></span>
                </li>
                
            </ul>
        </aside>
        
        <!-- Main Content Section -->
        <main class="flex-1 bg-gray-100 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
