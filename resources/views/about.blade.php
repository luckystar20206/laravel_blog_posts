@extends('layouts.main')

    @section('container')

    {{-- Body About --}}
        <h1>Ini adalah Halaman About</h1>
        <h3> {{ $name }} </h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $alt }}" width="200px" class="img-thumbnail rounded-circle">
    {{-- End Body --}}
    @endsection
    