@extends('layouts.master')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary">New post</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Created</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
