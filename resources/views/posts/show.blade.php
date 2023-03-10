@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
    <div class="container">
        <div class="col-md-4 mt-4" style="margin-bottom: 1rem">
            <div class="card blog-post my-4 my-sm-5 my-md-0">
                <img src="{{$posts->img}}" alt="" height="200">
                <div class="card-body">
                    <h5>{{$posts->title}}</h5>
                    <p>{{$posts->content}}</p>
                </div>
            </div>
            <a href="{{route('posts.edit',[$posts->id])}}"><button type="button" class="btn btn-primary">Edit</button></a>
            <form action="{{route('posts.destroy',$posts->id)}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger"  type="submit">Delete</button>
            </form>
        </div>

        <form action="{{route('comment.store')}}" method="post">
            @csrf
            <div class="form-group" style="margin-top: 10px;">
                <input type="hidden" value="{{$posts->id}}" name="post_id">
                Comment <textarea class="form-control" name="content" id="" cols="30" rows="4" required></textarea><br>
                <label for="image">Url your Image</label>
                <input type="text" name="image">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>


        <div class="row">
            @foreach($posts->comments as $comment)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-weight: bold" align="center"> {{$comment->content}}</p>
                                <form action="{{route('comment.destroy',$comment->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary" type="submit">Delete</button>
                                </form>
                        </div>
                    </div>@endforeach
                </div>
        </div>
    </div>
@endsection
