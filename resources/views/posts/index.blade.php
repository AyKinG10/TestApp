@extends('layouts.app')

@section('title', 'Main_Page')

@section('content')
    <h3 class="display-2" align="center">New Posts</h3>
    <p class="display-6">To Create Post please submit <span style="color: orangered;font-weight: bold">"Create Post"</span> in NavBar</p>
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                    <div class="col-md-4 mt-4" style="margin-bottom: 1rem">
                        <div class="card blog-post my-4 my-sm-5 my-md-0">
                            <img src="{{$post->img}}" alt="" height="200">
                            <div class="card-body">
                                <h5>{{$post->title}}</h5>
                                <p>{{$post->content}}</p>
                                <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Read More</a>
                            </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
