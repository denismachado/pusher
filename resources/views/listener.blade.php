<!DOCTYPE html>
<html>
<head>
    <title>Pusher Listener, wait ans you will see it!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('61d7dd9fb9d6a872fc46', {
            cluster: 'us2',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('event-triggered', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
</body>
</html>