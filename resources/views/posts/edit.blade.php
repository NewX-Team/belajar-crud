<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul</label>
        <input type="text" name="title" value="{{ $post->title }}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <label>Isi</label>
        <textarea name="content">{{ $post->content }}</textarea>
        @error('content')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
