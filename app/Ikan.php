<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    protected $fillable = ['name', 'type'];
    public function user(){
        return $this->belongsToMany('App\User','ikan_seller')->withpivot('harga_ikan','stok');
    }
    
    // public function market(){
    //     return $this->belongsToMany('App\Market','fish_market_user');
    // }
}
