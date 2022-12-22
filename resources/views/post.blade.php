@extends('layouts.main')

@section('container')
    <section>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </section>

    <a class="btn btn-primary" href="/blog" role="button">Back</a>
@endsection