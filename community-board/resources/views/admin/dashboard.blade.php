<x-app-layout>
    <div class="flex min-h-screen bg-gradient-to-r from-purple to-maroon">
        <!-- Sidebar -->
        <div class="w-64 bg-maroon text-white p-6 space-y-4 shadow-lg">
            <div class="flex items-center space-x-3 mb-8">
                <div class="w-10 h-10 rounded-full bg-purple flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Admin Panel</h2>
                    <p class="text-sm text-gray-300">System Control</p>
                </div>
            </div>

            <nav class="space-y-2">
                <a href="{{ route('posts.index') }}" class="flex items-center space-x-3 hover:bg-purple p-3 rounded-lg transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h10" />
                    </svg>
                    <span>Manage Posts</span>
                </a>

                <a href="#" class="flex items-center space-x-3 hover:bg-purple p-3 rounded-lg transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1m-4 6v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2h5m4-6a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    <span>Manage Users</span>
                </a>

                <a href="#" class="flex items-center space-x-3 hover:bg-purple p-3 rounded-lg transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Moderation</span>
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
                <h1 class="text-3xl font-bold text-purple mb-6">Admin Dashboard</h1>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Total Users</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Total Posts</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">Reports</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                    <div class="bg-purple bg-opacity-10 p-4 rounded-lg">
                        <h3 class="text-purple font-semibold mb-2">New Users Today</h3>
                        <p class="text-2xl font-bold text-maroon">0</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-purple bg-opacity-5 rounded-lg p-6">
                        <h2 class="text-xl font-semibold text-purple mb-4">Recent Reports</h2>
                        <p class="text-gray-600">No reports to show.</p>
                    </div>
                    <div class="bg-purple bg-opacity-5 rounded-lg p-6">
                        <h2 class="text-xl font-semibold text-purple mb-4">New Users</h2>
                        <p class="text-gray-600">No new users to show.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
