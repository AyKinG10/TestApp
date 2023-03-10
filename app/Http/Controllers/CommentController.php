<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function store(Request $req,comment $comment){
        $comment->create([
            'content'=>$req->content,
            'image'=>$req->image,

        ]);
        return back()->with('The Comment has been created successfully');
    }

    public function edit(Comment $comment){
        return view('comment.edit',['comment'=>$comment]);
    }
    public function update(Request $req,comment $comment){
        $comment->update([
            'content'=>$req->input('content'),
            'image' => $req->input('img'),
            'post_id'=>$req->input('book_id'),

        ]);
        return redirect(route('books.show',[$comment->book_id]))->with('The Comment has been updated successfully');

    }
    public function destroy(Comment $comment){
        $comment->delete();
        return redirect(route('books.show',[$comment->book_id]))->with('The Comment has been deleted successfully');
    }

}
