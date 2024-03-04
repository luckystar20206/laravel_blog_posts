@extends('layouts.main')

@section('container')

    <h2>{{ $post->tittle }}</h2>

    <p>By. Rangga Saputra <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>
    <br><br>
    <a href="/posts">Back to Blog</a>
@endsection