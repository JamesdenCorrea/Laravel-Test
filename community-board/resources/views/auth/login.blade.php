<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Community Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-purple to-maroon min-h-screen text-white font-sans">

    <!-- Navbar -->
    <nav class="bg-maroon px-6 py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-white">
                Community Board
            </a>
            <div class="space-x-6">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
                        <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Login Card -->
    <div class="flex justify-center items-center pt-16">
        <div class="w-full max-w-md p-8 bg-white text-black rounded-lg shadow-xl">
            <h2 class="text-3xl font-bold text-center text-purple-800 mb-6">{{ __('Login') }}</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-purple-800 mb-1">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 border border-purple-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                        required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-purple-800 mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password"
                        class="w-full px-4 py-3 border border-purple-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                        required>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm text-purple-800">{{ __('Remember Me') }}</label>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between items-center">
                    <button type="submit"
                        class="bg-purple-700 hover:bg-purple-800 text-white font-semibold px-6 py-2 rounded-lg transition duration-300">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-purple-700 hover:underline">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>
