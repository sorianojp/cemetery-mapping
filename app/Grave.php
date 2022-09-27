<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grave extends Model
{
    protected $fillable = [
       'name'
    ];

    public function sector(){
        return $this->belongsTo('App\Sector');
    }

    public function person()
    {
        return $this->hasOne('App\Person');
    }

    public function getFullNameAttribute()
    {
        return "{$this->lastname}, {$this->firstname} {$this->mi}";
    }
}
