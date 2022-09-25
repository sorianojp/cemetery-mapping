<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'name', 'lot_id',
    ];

    public function lot(){
        return $this->belongsTo('App\Lot');
    }

    public function persons(){
        return $this->hasMany('App\Person');
    }
}
