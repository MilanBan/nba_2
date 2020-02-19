@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$team->name}}</div>

                <div class="card-body">
                <p>{{$team->email}}</p>
                <p>{{$team->address}}</p>
                <p>{{$team->city}}</p>
                <p>Players:</p>
                @foreach($team->players as $player)
                    <p>- <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></p>
                @endforeach
                <hr>
                <p>Comments:</p>
                @foreach($team->comments as $comment)
                    <p><b>{{$comment->user->name}}:</b> {{$comment->content}}</p>
                @endforeach
                <hr><hr>
                
                <div><H2>Ostavi Komentar</H2></div>
                <form method="POST" action="/teams/{{$team->id}}/comments">
                @csrf
                 
                <div class="form-group">
                 <input type="text" class="form-control" id="content"  placeholder="content" name="content">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
                </form>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

