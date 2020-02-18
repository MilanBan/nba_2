<h1>PLAYER:</h1>
<h2>{{$player->first_name}} {{$player->last_name}}</h2>
<p>{{$player->email}}</p>
<p><a href="/{{$player->team->id}}">{{$player->team->name}}</a></p>