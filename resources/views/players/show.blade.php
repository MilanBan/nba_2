@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PLAYER: {{$player->first_name}} {{$player->last_name}}</div>

                <div class="card-body">
                <h2>{{$player->first_name}} {{$player->last_name}}</h2>
                <p>{{$player->email}}</p>
                <p><a href="/{{$player->team->id}}">{{$player->team->name}}</a></p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

