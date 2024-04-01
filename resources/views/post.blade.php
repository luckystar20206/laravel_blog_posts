@extends('layouts.main')

@section('container')

    {{-- Body --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->tittle }}</h2>
                 
                    <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                    {{-- Dibawah ini adalah kondisi ketika gambar ada dan juga tidak ada --}}

                    @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                    

                    <article class="my-3 fs-6">
                     <p>{!! $post->body !!}</p>
                    </article>
    <a href="/posts" class="d-block mt-3">Back to Blog</a>
            </div>
        </div>
    </div>
    {{-- End Body --}}
    
@endsection