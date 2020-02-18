<?php

namespace App;

use App\Player;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['id'];

    public function players(){
        return $this->hasMany(Player::class);
    }
}
