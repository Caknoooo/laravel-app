@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman blog posts</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <h5>By. <a href="/authors/{{ $post->author->username  }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </h5>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </article>
    @endforeach
@endsection