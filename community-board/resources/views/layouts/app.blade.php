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
    </head>
    <body class="font-sans antialiased bg-purple-800 text-white"> <!-- Changed to bg-purple-800 -->
        <div class="min-h-screen">
            <!-- Navbar with custom purple color -->
            <nav class="bg-purple text-white px-6 py-4 shadow-md"> <!-- Changed bg-purple -->
                <div class="container mx-auto flex justify-between items-center">
                    <a href="{{ url('/') }}" class="text-2xl font-bold">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <div class="space-x-6">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('dashboard') }}" class="text-white hover:text-gray-300">{{ __('Dashboard') }}</a>
                            @else
                                <a href="{{ route('login') }}" class="text-white hover:text-gray-300">{{ __('Login') }}</a>
                                <a href="{{ route('register') }}" class="text-white hover:text-gray-300">{{ __('Register') }}</a>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content') <!-- Content area -->
            </main>
        </div>
    </body>
</html>
