<?php

namespace App\Http\Controllers;

use App\Team;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, $teamId){
        $id = auth()->user()->id;
        $comment = Comment::create(array_merge($request->all(), ['user_id' => $id]));
        $teamId = $comment->team->id;

        \Log::info($id);
        
        // $team = Team::findOrFail($teamId);
        // $team->comments()->create(array_merge($request->all(), ['user_id' => $id]));
        
        return redirect('/teams/{id}', compact(['id' => $teamId]));
    }
}
