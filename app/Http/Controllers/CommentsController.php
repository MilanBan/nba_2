<?php

namespace App\Http\Controllers;

use App\Team;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request,Team $team){
        // $id = auth()->user()->id;
        // $comment = Comment::create(array_merge($request->all(), ['user_id' => $id]));
        // $teamId = $comment->team->id;
        
        
        
        // $team = Team::findOrFail($teamId);
        $team->comments()->create(array_merge($request->all(), 
        ['user_id' => auth()->user()->id]));
        // $team->comments()->create(['user_id' => auth()->user()->id, 'content' => $request->content]);
        \Log::info($team);
        
        return redirect('/teams/'.$team);
    }
}
