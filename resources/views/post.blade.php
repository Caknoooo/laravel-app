@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h5>By. <a href="/posts {{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </h5>

                @if($post->image)
                    <div  style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else 
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-2 fs-6">
                    {!! $post->body !!}
                </article>
                
                <a class="btn btn-primary mt-3 " href="/posts" role="button">Back</a>
            </div>
        </div>
    </div>
@endsection