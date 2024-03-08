

@extends('layouts.main')

    @section('container')
    <h1 class="mb-4">{{ $tittle }}</h1>


    @if ($posts->count() > 0)
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{ $posts[0]->tittle }}</h3>
          <p>
            <small class="text-body-secondary">
            By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> In <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
        </div>
    </div>
        
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">

            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->tittle }}</a></h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <p>{{ $post->excerpt }}</p>

            <a href="posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
        
    @endsection
