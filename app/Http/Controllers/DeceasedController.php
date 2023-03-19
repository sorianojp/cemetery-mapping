<?php

namespace App\Http\Controllers;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DeceasedController extends Controller
{
    public function index()
    {

        $userId = Auth::id();
        $people = Person::whereHas('users', function ($query) use ($userId) {
            $query->where('users.id', $userId);
        })->get();

  
        return view('deceaseds.index',compact('people'));
    }

    public function show(Person $person)
    {

        return view('deceaseds.show', compact('person'));
    }
}
