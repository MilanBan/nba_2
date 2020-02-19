<?php

namespace App\Http\Controllers;

use App\Team;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(CommentRequest $request,Team $team){      // u ruoute mora biti isti naziv wildcard-a i parametra
        
        // $team = Team::findOrFail($teamId);

        $team->comments()->create(array_merge($request->all(), 
        ['user_id' => auth()->user()->id]));
        // $team->comments()->create(['user_id' => auth()->user()->id, 'content' => $request->content]);
                
        return redirect('/teams/'.$team->id);
    }


}
