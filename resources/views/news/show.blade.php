@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEWS</div>
                    <h3><b>{{$new->user->name}}:</b> {{$new->title}}</h3>
                    <p>{{$new->content}}</p><hr>
            </div>
        </div>
    </div>
</div>

@endsection