@extends('dashboard.layouts.main')

@section('container')


<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"> </span> Back To Posts</a>

            @if ($post->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid mt-4">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-4">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection


