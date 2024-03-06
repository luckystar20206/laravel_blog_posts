@extends('layouts.main')

@section('container')

    <h2>{{ $post->tittle }}</h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>

    <a href="/posts" class="d-block mt-3">Back to Blog</a>
@endsection