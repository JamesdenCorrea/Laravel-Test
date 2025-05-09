<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}"><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5">{{ old('content', $post->content) }}</textarea><br><br>

        <button type="submit">Update Post</button>
    </form>

    <a href="{{ route('posts.index') }}">Back to Posts</a>
</body>
</html>
