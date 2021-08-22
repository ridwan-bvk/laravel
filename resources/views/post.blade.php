{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')
     @foreach ($posts as $pos)
     <article class="mb-5">
        <a href="/post/{{ $pos["slug"] }}"><h2>{{ $pos["titles"] }}</h2></a>
        <h5>By: {{ $pos["Author"] }}</h5>     
        <p>{{ $pos["body"] }}</p>
        
     </article>
    @endforeach

@endsection