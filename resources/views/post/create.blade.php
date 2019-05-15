
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="/post" method="post">
            {{ csrf_field() }}
            <input type="text" name="title"><br>
            <textarea name="description"></textarea><br>
            <input type="submit">
        </form>
    </div>
@endsection