@extends('layouts/main')

@section('container')
    <div class="card-body">
        <h1>Blogs</h1> <hr>
    </div>
    <div class="card mb-4">
        @foreach ($posts as $post)
            <article class="card-body">
                <h2>
                    <a href="/post/{{ $post->id }}">
                        {{ $post['title'] }}
                    </a>
                </h2>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection