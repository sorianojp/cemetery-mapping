<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'lastname', 'firstname', 'mi', 'born', 'died', 'sector_id'
    ];

    public function sector(){
        return $this->belongsTo('App\Sector');
    }

    
    public function getFullNameAttribute()
    {
        return "{$this->lastname}, {$this->firstname} {$this->mi}";
    }
}
