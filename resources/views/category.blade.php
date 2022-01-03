
@extends('layouts.main')
@section('container')


{{-- <h4>category post : {{ $category->name }}</h4> --}}
<h1 class="mb-3 text-center">{{ $tittle }}</h1>
    <div class="row justify-content-md-center mb-3">
        <div class="col-md-6 ">
            <form action="/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>    
        </div>
    </div>
   
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                class="text-decoration-none text-dark">{{ $posts[0]->category->title }}</a></h3>
        <small class="text-muted">
            <p> By:
                 {{-- <a href="/authors/{{ $posts[0]->user->username }}"
                    class="text-decoration-none">{{ $user[0]->posts->name }}</a> --}}
                     in
                <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->name }} </a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </p>

        </small>

        <p class="card-text">{{ $posts[0]->excerpt }}.</p>
        <a href="/post/{{ $posts[0]->id }}" class="text-decoration-none btn btn-primary">read more</a>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card"">
                    <div class="   position-absolute bg-dark px-3 py-2 "
                        style="background-color: rgba(0,0,0,0.1)">
                        <a href="/categories/{{ $post->category->slug }}"
                            class="text-white text-decoration-none">{{ $post->category->name }}
                        </a>
                    </div>
                <img src=" https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top"
                    alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h3 class="card-title"><a href="/post/{{ $post->id }}"
                            class="text-decoration-none text-dark">{{ $post->title }}</a></h3>
                    <small class="text-muted">
                        <p> By: 
                            {{-- <a href="/authors/{{ $post->user->username }}"
                                class="text-decoration-none">{{ $post->user->name }}</a> --}}
                                 in
                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                                {{ $post->category->name }} </a>
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </small>

                    <p class="card-text">{{ $posts[0]->excerpt }}.</p>
                    <a href="/post/{{ $post->id }}" class="btn btn-primary">Readmore</a>
                </div>
            </div>
        </div>
     @endforeach
    </div>
</div>

@else
<p class="text-center fs">Not found</p>
@endif




{{-- @foreach ($category->posts as $data) --}}
    {{-- <h6>{{ $data->title }}</h6> --}}
{{-- <p>{{ $data->body }}</p> --}}
{{-- @endforeach --}}
    <a href="/posts/" class="d-block mt-5">back to posts</a> 
    

@endsection

