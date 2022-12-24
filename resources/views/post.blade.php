@extends('layouts.main')

@section('container')
    <section>
        <h2>{{ $post->title }}</h2>
        <h3>by Caknooo in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h3>
        {!! $post->body !!}
    </section>

    <a class="btn btn-primary" href="/posts" role="button">Back</a>
@endsection