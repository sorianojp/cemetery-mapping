<?php

namespace App\Http\Controllers;
use App\Person;
use Illuminate\Http\Request;

class DeceasedController extends Controller
{
    public function index()
    {
        $persons = Person::all();
  
        return view('deceaseds.index',compact('persons'));
    }

    public function show(Person $person)
    {

        return view('deceaseds.show', compact('person'));
    }
}
