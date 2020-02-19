<?php

namespace App;

use App\Team;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['team_id', 'user_id', 'content'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }

}
