<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!--h1>All Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>{{ $post['title'] }}</li>
    @endforeach
</ul-->
<div id="app">
</div>
<a href="/post/create">Create New Post</a>
</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
