@dd($post);


@extends('layouts.main')
@section('container')
<article class="mb-5">
    <h2>{{ $post["titles"] }}</h2>
    <h5>By: {{ $post["Author"]}}</h5>     
    <p>{{ $post["body"] }}</p>
</article>
<a href="/blog">back</a>
@endsection

</section>