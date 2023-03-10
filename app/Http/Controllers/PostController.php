<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(Request $request){
        $allBooks = Post::all();
        return view('posts.index',['posts'=>$allBooks]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $req)
    {
        Post::create([
            'title' => $req->title,
            'img'=>$req->img,
            'content'=>$req->content,
        ]);
        return redirect(route('posts.index'))->with('The Post has been added successfully');
    }

    public function show(Post $post){
        return view('posts.show',['posts'=>$post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit',['posts'=>$post]);
    }

    public function update(Request $request,Post $post)
    {
        $post->update([
            'title'=>$request->input('title'),
            'img'=> $request->input('img'),
            'content'=>$request->input('content'),
        ]);
        return redirect(route('posts.index'))->with('The Post has been updated successfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
