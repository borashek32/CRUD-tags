@extends('layouts.site')

@section('title', 'Posts')

@section('content')
    <div style="margin-top: 50px">
        <h1>Posts by tag #{{ $tag->name }}</h1>
    </div>

    <a href="{{ route('posts.create') }}">
        <button class="btn btn-secondary" style="margin-bottom: 20px">
            Create
        </button>
    </a>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 60) }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('posts.show', $post) }}">
                                    <button class="btn btn-primary">
                                        Show
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('posts.edit', $post) }}">
                                    <button class="btn btn-success">
                                        Edit
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
