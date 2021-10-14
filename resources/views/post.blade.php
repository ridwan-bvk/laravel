
@extends('layouts.main')
@section('container')

@dd($post)
    {{-- <h1 class="mb-5">{{ $post->title }}</h1> --}}
    <p>
        {{-- by. <a href="#" class="text-decoration-none">{{$posts->user->name}}</a>  --}}
        {{-- in <a href="/categories/ {{ $posts->slug }}">
            {{ $post->category->name }}
        </a> --}}
     </p>

        {{-- {!! $post->body!!} --}}
   
    {{-- //d-block itu biar enter --}}
    <a href="/posts/" class="d-block mt-5">back to posts</a>
    

@endsection
