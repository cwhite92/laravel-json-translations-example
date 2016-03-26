@extends('layouts.master')

@section('content')
    <h1>Create new post</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4">
                        en
                        <input type="text" name="title[en]" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        fr
                        <input type="text" name="title[fr]" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        de
                        <input type="text" name="title[de]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Save post" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
