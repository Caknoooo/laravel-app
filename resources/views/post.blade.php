@extends('layouts.main')

@section('container')
    <section>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}
    </section>

    <a class="btn btn-primary" href="/posts" role="button">Back</a>
@endsection