@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <p>{{ $jurusan }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200", class="img-thumbnail rounded-circle">
    <script src="js/script.js"></script>
@endsection