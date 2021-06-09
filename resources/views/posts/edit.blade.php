@extends('layouts.site')

@section('title', 'Edit post')

@section('content')
    <div style="margin-top: 50px">
        <h1>Edit</h1>
    </div>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PUT')
        @include('posts._form')
    </form>
@endsection
