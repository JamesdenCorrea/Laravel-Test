<!-- resources/views/posts/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-6">📬 All Posts</h1>

        <div class="mb-6">
            <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Create New Post</a>
        </div>

        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded p-6 mb-4">
                <h2 class="text-xl font-semibold">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-700 mt-2">{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post) }}" class="inline-block mt-4 text-sm text-indigo-600 hover:underline">✏️ Edit</a>
            </div>
        @endforeach
    </div>
</body>
</html>
