<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-purple to-maroon text-white font-sans min-h-screen">

    <!-- Navigation Links -->
    <nav class="bg-maroon px-6 py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-white">
                Community Board
            </a>
            <div class="space-x-6">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('user.dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                        <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="flex justify-center items-center min-h-[calc(100vh-4rem)]">
        <div class="max-w-lg mx-auto p-8 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg shadow-xl">
            <h1 class="text-4xl font-extrabold text-white mb-4">Welcome to Our Community</h1>
            <p class="text-lg mb-8 text-gray-200">Connect, share, and grow with others in a space designed for you.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('login') }}" class="px-8 py-3 bg-purple hover:bg-purple-800 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-8 py-3 bg-maroon hover:bg-red-800 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                    Register
                </a>
            </div>
        </div>
    </div>

</body>
</html>
