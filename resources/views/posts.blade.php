

@extends('layouts.main')

    @section('container')
    <h1 class="mb-4">{{ $tittle }}</h1>


    @if ($posts->count() > 0)
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{ $posts[0]->tittle }}</h3>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
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
