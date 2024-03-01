@extends('layouts.main')

    @section('container')
        <h1>Ini Halaman About</h1>
        <h3> {{ $name }} </h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $alt }}" width="200px">
    @endsection