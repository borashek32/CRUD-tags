@extends('layouts.site')

@section('title', 'Edit post')

@section('content')
    <div style="margin-top: 50px">
        <h1>Edit</h1>
    </div>

    @include('posts._form')
@endsection
