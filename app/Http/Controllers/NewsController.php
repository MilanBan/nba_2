<?php

namespace App\Http\Controllers;

use App\News;
use App\Team;
use App\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $news = News::with('user', 'teams')->orderBy('created_at', 'desc')->paginate(6);   //->get(); umesto toga paginate zavrsava 

        return view('news.index', compact('news'));
    }

    public function show(News $new){
        $new->load('user', 'teams');

        return view('news.show', compact('new'));

    }

    public function selectedByTeam($teamName)
    {
        $team = Team::where('name', $teamName)->first(); //pretraga po koloni name
        
        $news = $team->news()->with('user', 'teams')->paginate(4);

        return view('news.newsByTeam', compact('team', 'news'));
    }

}
