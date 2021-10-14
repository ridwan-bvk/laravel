
@extends('layouts.main')
@section('container')
{{-- @dd($posts); --}}

    <h1 class="mb-5">post category: {{ $category }}</h1>
    <p>
        by.
        in <a href="/categories/ {{ $posts->category->slug }}">
            {{ $post->category->name }}
        </a>
     </p>

        {{-- {!! $posts->body!!} --}}
   
    {{-- //d-block itu biar enter --}}
    <a href="/posts/" class="d-block mt-5">back to posts</a>
    

@endsection
