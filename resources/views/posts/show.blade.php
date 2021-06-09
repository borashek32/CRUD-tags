@extends('layouts.site')

@section('title', 'Post')

@section('content')
    <div style="margin-top: 50px">
        <h1>Post "{{ $post->title }}"</h1>
        <p>{{ $post->content }}</p>
        <div class="list-group">
            @foreach($post->tags as $tag)
                <a href="{{ route('posts-by-tags', $tag->slug) }}">#{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
@endsection
