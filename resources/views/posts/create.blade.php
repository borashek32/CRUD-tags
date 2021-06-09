@extends('layouts.site')

@section('title', 'Create post')

@section('content')
    <div style="margin-top: 50px">
        <h1>Create</h1>
    </div>

    <form action="{{ route('posts.store') }}" method="POST">
        @include('posts._form', [
            'post' => new \App\Models\Post(),
            'tags' => ''
        ])
    </form>
@endsection

