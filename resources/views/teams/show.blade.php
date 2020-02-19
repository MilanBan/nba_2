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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

