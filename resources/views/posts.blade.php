

@extends('layouts.main')

    @section('container')
    <h1 class="mb-4">{{ $tittle }}</h1>

    {{-- Kondisi untuk menampilkan Hero --}}

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
          <h3 class="card-title"> <a href="{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->tittle }}</a></h3>
          <p>
            <small class="text-body-secondary">
            By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> In <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

        </div>
    </div>
        
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    {{-- End Hero --}}

    {{-- Foreach Untuk Card --}}
    
    <div class="col">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug}}" class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->tittle }}</h5>
              <small class="text-muted">
                By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in {{ $post->created_at->diffForHumans() }}
                </small>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- End Foreach Untuk Card --}}
        
    @endsection
