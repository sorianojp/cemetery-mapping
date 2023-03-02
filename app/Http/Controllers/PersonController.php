<?php

namespace App\Http\Controllers;

use App\Grave;
use App\Lot;
use App\Sector;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:staff');
    }

    public function index()
    {
        $lots = Lot::all();

        return view('persons.index',compact('lots'));
    }

    public function create(Grave $grave)
    {
        return view('persons.create', compact('grave'));
    }

    public function store(Request $request, Grave $grave)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'mi' => 'required',
            'born' => 'required',
            'died' => 'required'
        ]);

        $grave->person()->create($request->all());

        return redirect()->route('persons.index')
                        ->with('success', 'Success!.');
    }

    public function show(Person $person)
    {
        return view('persons.show', compact('person'));
    }
}
