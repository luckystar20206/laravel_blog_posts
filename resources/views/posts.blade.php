

@extends('layouts.main')

    @section('container')

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">

            <h2><a href="posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->tittle }}</a></h2>

            <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <p>{{ $post->excerpt }}</p>

            <a href="posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
        
    @endsection
