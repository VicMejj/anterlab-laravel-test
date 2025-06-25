<head>
        <link rel="stylesheet" href="{{ asset('../app.css') }}">

</head>
<div class="container">
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">+ New Post</a>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @foreach($posts as $post)
        <div class="post-card">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

            <a href="{{ route('posts.show', $post) }}">View</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Delete this post?')">Delete</button>
            </form>
        </div>
    @endforeach
</div>
