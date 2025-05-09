<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                <!-- Display posts -->
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-purple-800">Your Posts</h3>
                    @if(isset($posts) && count($posts) > 0)
                        <ul class="list-disc pl-5 mt-2">
                            @foreach ($posts as $post)
                                <li class="text-gray-700">{{ $post->title }} - {{ $post->content }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-600 mt-2">No posts yet.</p>
                    @endif

                    <!-- Link to create a post -->
                    <div class="mt-4">
                        <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 bg-purple-700 hover:bg-purple-800 text-white font-semibold rounded-lg transition duration-200">
                            View All Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
