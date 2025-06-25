<head>
        <link rel="stylesheet" href="{{ asset('../app.css') }}">

</head>
<div class="container">
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $post->title) }}"><br>
    @error('title') <small style="color:red;">{{ $message }}</small><br> @enderror

    <textarea name="content">{{ old('content', $post->content) }}</textarea><br>
    @error('content') <small style="color:red;">{{ $message }}</small><br> @enderror

    <button type="submit">Update Post</button>
</form>

<a href="{{ route('posts.index') }}">← Back</a>
</div>