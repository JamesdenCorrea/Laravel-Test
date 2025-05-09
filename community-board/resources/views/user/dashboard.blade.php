<x-app-layout>
    <div class="flex min-h-screen bg-gradient-to-r from-purple to-maroon">
        <!-- Sidebar -->
        <div class="w-64 bg-maroon text-white p-6 space-y-4 shadow-lg">
            <div class="flex items-center space-x-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-purple flex items-center justify-center">
                    <span class="text-xl font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
                <div>
                    <h2 class="text-xl font-bold">{{ Auth::user()->name }}</h2>
                    <p class="text-sm text-gray-300">User Dashboard</p>
                </div>
            </div>

            <nav class="space-y-2">
                <a href="{{ route('posts.index') }}" class="flex items-center space-x-3 hover:bg-purple p-3 rounded-lg transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h10" />
                    </svg>
                    <span>View Posts</span>
                </a>

                <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 hover:bg-purple p-3 rounded-lg transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Edit Profile</span>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="pt-4">
                    @csrf
                    <button type="submit" class="flex items-center space-x-3 hover:bg-red-600 bg-red-500 p-3 rounded-lg transition duration-200 w-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1" />
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow-xl p-6">
                <h1 class="text-3xl font-bold text-purple mb-6">Welcome, {{ Auth::user()->name }}!</h1>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Your Posts</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Comments</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Profile Views</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-purple bg-opacity-5 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-purple mb-4">Recent Activity</h2>
                    <p class="text-gray-600">No recent activity to show.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
