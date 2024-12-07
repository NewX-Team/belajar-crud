<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <label>Content</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Create</button>
    </form>
</body>
</html>
