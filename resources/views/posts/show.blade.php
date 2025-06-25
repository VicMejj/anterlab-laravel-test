<head>
        <link rel="stylesheet" href="{{ asset('../app.css') }}">

</head>
<div class="container">
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<a href="{{ route('posts.edit', $post) }}">Edit</a> |
<a href="{{ route('posts.index') }}">← Back to List</a>
</div>