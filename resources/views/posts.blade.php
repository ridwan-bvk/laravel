@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}</a>
            </h2>
            {{-- <p>{{ $pos->body }}</p> --}}
            {{-- <h6> By: <a href="">{{ $pos->user->name }}</a> in  --}}
                
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">
                    {{ $post->category->name }} </a>
            </h6>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more</a>

        </article>
    @endforeach

@endsection
