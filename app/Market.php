<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Market extends Model
{
    public function user(){
        return $this->hasMany('App\User');
    }
    // public function fish(){
    //     return $this->belongsToMany('App\Fish','fish_market_user');
    // }
}
