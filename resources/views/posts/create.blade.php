<head>
        <link rel="stylesheet" href="{{ asset('../app.css') }}">

</head>
<div class="container">
    <h1>Create New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <div class="alert">{{ $message }}</div> @enderror

        <label>Content</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content') <div class="alert">{{ $message }}</div> @enderror

        <button type="submit">Create</button>
    </form>
</div>
