@extends('layouts.main')

@section('container')
    <section>
        <h2>{{ $post->title }}</h2>
        <h5>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </h5>
        {!! $post->body !!}
    </section>

    <a class="btn btn-primary mt-3 " href="/posts" role="button">Back</a>
@endsection