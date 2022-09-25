<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = [
        'name'
    ];

    public function sectors(){
        return $this->hasMany('App\Sector');
    }
}
