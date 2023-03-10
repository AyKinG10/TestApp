@extends('layouts.app')

@section('title', 'Create_Post')

@section('content')
    <h1 align="center">Create Post</h1>
    <div class="container">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Post_Title">Post Title</label>
                <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter Post Title">
            </div>
            <div class="form-group">
                <label for="Post_Content">Content</label>
                <input type="text" name="content" class="form-control" placeholder="Enter Post Content">
            </div>

            <div class="form-group">
                <label for="Post_image">Image</label>
                <input type="text" name="img" class="form-control" placeholder="Url for your image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
