<?php

namespace App\Http\Controllers;
use App\Person;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function deceased()
    {
        $persons = Person::all();
  
        return view('deceased',compact('persons'));
    }
}
