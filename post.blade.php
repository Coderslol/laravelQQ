@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post['title'] }}</h2>
    <h5>{{ $post['penulis'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>

<a href="/blog">Bakc</a>
@endsection