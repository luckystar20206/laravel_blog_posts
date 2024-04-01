@extends('dashboard.layouts.main')


@section('container')
      {{-- Body --}}
      <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->tittle }}</h2>
                 
                    <a href="/dashboard/posts" class="badge bg-success text-decoration-none" ><span data-feather="arrow-left"></span> Back to all My Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want delete this post?')">
                          <span data-feather="trash"></span> Delete  
                        </button>
                      </form>

                      @if($post->image)
                      {{-- dibawah ini kondisi ketika gambar diisi user --}}
                      <div style="max-height:350px; overflow:hidden; ">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                      </div>
                      @else
                      {{-- dibawah ini kondisi ketika gambar tidak diisi user --}}
                      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                      @endif


                      <article class="my-3 fs-6">
                     <p>{!! $post->body !!}</p>
                    </article>
    <a href="/dashboard/posts" class="d-block mt-3">Back my post</a>
            </div>
        </div>
    </div>
    {{-- End Body --}}
@endsection