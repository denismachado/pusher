<form method="post" action="/event">
    <input type="text" name="content">
    <input type="submit">
    {{ csrf_field() }}
</form>