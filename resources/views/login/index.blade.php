@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4 mt-4">

    {{-- Alert for registration Success --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- End Allert --}}

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="/login" method="post">
        @csrf
    
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" autofocus required name="email">
          <label for="email">Email address</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
          <label for="password">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Dont Have Account? <a href="/register"> Register Now!</a></small>
  </main>
  </div>
</div>

@endsection