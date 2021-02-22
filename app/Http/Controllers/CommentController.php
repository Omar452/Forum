<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Subject;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Subject $subject)
    {
        //dd($request,$subject);
        request()->validate([
            'content' => 'required|min:5'
        ]);

        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->user_id = auth()->user()->id;

        $subject->comments()->save($comment);

        return redirect()->route('subjects.show', $subject);
    }

    
    public function storeReply(Comment $comment, Request $request)
    {
        request()->validate([
            'reply' => 'required|min:5'
        ]);

        $reply = new Comment();
        $reply->content = $request['reply'];
        $reply->user_id = auth()->user()->id;

        $comment->comments()->save($reply);

        return redirect()->back();
    }

    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
    }
}
