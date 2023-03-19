<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'lastname', 'firstname', 'mi', 'born', 'died', 'grave_id'
    ];

    public function grave(){
        return $this->belongsTo('App\Grave');
    }


    public function getFullNameAttribute()
    {
        return "{$this->lastname}, {$this->firstname} {$this->mi}";
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


}
