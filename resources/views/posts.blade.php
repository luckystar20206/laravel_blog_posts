

@extends('layouts.main')

    @section('container')
    <h1 class="mb-3 text-center">{{ $tittle }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif

          @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    {{-- Kondisi untuk menampilkan Hero --}}

    @if ($posts->count())
    <div class="card mb-4">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
          <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->tittle }}</a></h3>
          <p>
            <small class="text-body-secondary">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> In <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

        </div>
    </div>
      

    {{-- End Hero --}}

    {{-- Foreach Untuk Card --}}
    
    <div class="col">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug}}" class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->tittle }}</h5>
              <small class="text-muted">
                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in {{ $post->created_at->diffForHumans() }}
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

    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    
    {{ $posts->links() }}

    @endsection
