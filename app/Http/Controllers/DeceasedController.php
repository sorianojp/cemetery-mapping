<?php

namespace App\Http\Controllers;
use App\Person;
use App\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DeceasedController extends Controller
{
    public function index()
    {

        // $userId = Auth::id();
        // $people = Person::whereHas('users', function ($query) use ($userId) {
        //     $query->where('users.id', $userId);
        // })->get();

        $lots = Lot::all();
  
        return view('deceaseds.index',compact('lots'));
    }

    public function show(Person $person)
    {

        return view('deceaseds.show', compact('person'));
    }
}
