<h1>{{$team->name}}</h1>
<p>{{$team->email}}</p>
<p>{{$team->address}}</p>
<p>{{$team->city}}</p>
<p>Players:</p>
@foreach($team->players as $player)
    <p>- <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></p>
@endforeach