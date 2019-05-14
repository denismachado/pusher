<h3>Public Channel</h3>
<h5><a href="/listener">Click here to public channel listener</a></h5>
<form method="post" action="/event">
    <input type="text" name="content">
    <input type="submit">
    {{ csrf_field() }}
</form>