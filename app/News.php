<?php

namespace App;

use App\Team;
use App\User;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $table = 'news';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function teams(){
        return $this->belongsToMany(Team::class);
    }
}
