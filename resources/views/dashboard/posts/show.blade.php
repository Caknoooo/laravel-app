@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit </a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete </a>
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-2 fs-6">
                {!! $post->body !!}
            </article>
            
            <a class="btn btn-primary mt-3 " href="/posts" role="button">Back</a>
        </div>
    </div>
</div>

@endsection