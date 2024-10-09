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
        <!-- Import Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" x-data="{ open: false }"> <!-- Alpine.js data -->
            <!-- Sidebar and Content Container -->
            <div class="flex">
                <!-- Sidebar -->
                <aside :class="open ? 'block' : 'hidden lg:block'" class="bg-gray-800 text-white w-64 min-h-screen p-4">
                    <div class="text-lg font-semibold mb-4">
                        Sidebar Menu
                    </div>
                    <ul>
                        <li class="mb-2">
                            <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white block px-4 py-2 rounded-md">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('roles.index') }}" class="text-gray-300 hover:text-white block px-4 py-2 rounded-md">
                                Roles
                            </a>
                        </li>
                    </ul>
                </aside>

                <!-- Main Content -->
                <div class="flex-1">
                    <header class="bg-white border-b border-gray-100 flex justify-between items-center p-4">
                        <!-- Toggle button for mobile view -->
                        <button @click="open = !open" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>

                        <!-- Page Header (like before) -->
                        @if (isset($header))
                            <div class="font-semibold text-lg text-gray-800">
                                {{ $header }}
                            </div>
                        @endif
                    </header>

                    <!-- Page Content -->
                    <main class="p-6">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
