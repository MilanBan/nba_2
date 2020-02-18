<h1>TEAMS:</h1>
@foreach($teams as $team)
    <h2><a href="/{{$team->id}}">{{$team->name}}</a></h2>
@endforeach