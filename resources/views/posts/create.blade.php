@extends('layouts.site')

@section('title', 'Create post')

@section('content')
    <div style="margin-top: 50px">
        <h1>Create</h1>
    </div>

    @include('posts._form')
@endsection

