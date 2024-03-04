@extends('layouts.main')

@section('container')

    <h2>{{ $post->tittle }}</h2>
    <p>{{ $post->body }}
    <br><br>
    <a href="/posts">Back to Blog</a>
@endsection