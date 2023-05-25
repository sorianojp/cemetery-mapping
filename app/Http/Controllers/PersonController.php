<?php

namespace App\Http\Controllers;

use App\Grave;
use App\Lot;
use App\Sector;
use App\Person;
use App\User;
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
        $users = User::all();

        return view('persons.create', compact('grave', 'users'));
    }

    public function store(Request $request, Grave $grave)
    {
        $request->validate([
            'owner_lastname' => 'nullable',
            'owner_firstname' => 'nullable',
            'owner_mi' => 'nullable',
            'lastname' => 'nullable',
            'firstname' => 'nullable',
            'mi' => 'nullable',
            'born' => 'nullable',
            'died' => 'nullable',
            'payment' => 'nullable',
            'status' => 'nullable',
        ]);

        $person = $grave->person()->create($request->all());

        $relatives = $request->input('relatives', []);
        $person->users()->sync($relatives);

        return redirect()->route('persons.index')
                        ->with('success', 'Success!.');
    }



    public function show(Person $person, $grave_number)
    {
        return view('persons.show', compact('person', 'grave_number'));
    }
    


    public function edit(Person $person)
    {
        $users = User::all();
        return view('persons.edit', compact('person', 'users'));
    }

    public function owner(Person $person)
    {
        $users = User::all();
        return view('persons.owner', compact('person', 'users'));
    }

    public function update(Request $request, Person $person)
    {
        $request->validate([
            'owner_lastname' => 'nullable',
            'owner_firstname' => 'nullable',
            'owner_mi' => 'nullable',
            'lastname' => 'nullable',
            'firstname' => 'nullable',
            'mi' => 'nullable',
            'born' => 'nullable',
            'died' => 'nullable',
            'payment' => 'nullable',
            'status' => 'nullable',
        ]);

        $person->update($request->all());

        $relatives = $request->input('relatives', []);
        $person->users()->sync($relatives);

        return redirect()->route('persons.index', $person)
                        ->with('success', 'Person details have been updated successfully.');
    }

}
