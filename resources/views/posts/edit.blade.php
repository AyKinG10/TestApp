@extends('layouts.app')

@section('title', 'Edit Page')

@section('content')
    <div class="container" style="width: 60%;">
        <form action="{{route('posts.update',$posts->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-top: 20px;">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$posts->title}}"><br>
                <label for="title">Content</label>
                <input type="text" class="form-control" name="content" value="{{$posts->content}}"><br>
                <label for="title">Image</label>
                <input type="text" class="form-control" name="img" value="{{$posts->img}}"><br>
                <button class="btn btn-primary form-control mt-3" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
