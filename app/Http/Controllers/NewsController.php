<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $news = News::with('user')->orderBy('created_at', 'desc')->paginate(6);   //->get(); umesto toga paginate zavrsava 

        return view('news.index', compact('news'));
    }

    public function show(News $new){
        $new->load('user');

        return view('news.show', compact('new'));

    }


}
