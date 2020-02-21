@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEWS</div>
                @foreach($news as $new)
                    <h3>{{$new->user->name}}</h3>
                    <p><a href="/news/{{$new->id}}">{{$new->title}}</a></p><hr><br>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection