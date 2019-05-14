<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
</head>
<body>
<h1>All Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>{{ $post['title'] }}</li>
    @endforeach
</ul>
<a href="/post/create">Create New Post</a>
<div id="app"></div>
</body>

<script>
    // Enable pusher logging - don't include this in production
    /*
    Pusher.logToConsole = true;

    var pusher = new Pusher('94289671f2ca9ad220d3', {
        cluster: 'us2',
        forceTLS: false,
        authEndpoint: "/broadcasting/auth",
        auth: {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
                'Accept' : "application/json"
            }
        },
    });

    var channel = pusher.subscribe('private-channel');
    channel.bind('private-event', function(data) {
        alert(JSON.stringify(data));
    });
    */

    Echo.private(`private-channel`)
        .listen('private-event', (e) => {
            console.log(e);
            alert(JSON.stringify(e));
        });
</script>
https://www.youtube.com/watch?v=2PTgJwxf6UI
</html>


