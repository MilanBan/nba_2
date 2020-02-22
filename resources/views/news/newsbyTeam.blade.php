@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$team->name}}</div>
                @foreach($news as $new)
                <p>new title: <a href="/news/{{$new->id }}">{{ $new->title }}</a> </p>
                <p>new writer:{{ $new->user->name }}</p>
                <p>This new involves: 
                    @foreach($new->teams as $team)
                        <a href="/news/team/{{ $team->name }}">{{ $team->name}}</a>
                    @endforeach
                </p>
                <p>new date: {{ $new->created_at }}</p>
                <hr>
@endforeach

{{ $news->render() }}
            </div>
        </div>
    </div>
</div>

@endsection