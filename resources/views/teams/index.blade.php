@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TEAMS</div>

                <div class="card-body">
                @foreach($teams as $team)
                     <h2><a href="/teams/{{$team->id}}">{{$team->name}}</a></h2>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

