@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEWS</div>
                    <h3><b>{{$new->user->name}}:</b> {{$new->title}}</h3>
                    <p>{{$new->content}}</p><hr>
                    <p>Teams in this new: 
                    @if (is_array($new) || is_object($new))
                    @foreach($new->teams as $team)
                    <a href="/news/team/{{ $team->name }}">{{ $team->name}}</a>
                    @endforeach
                    @endif
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection