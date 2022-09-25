<?php

namespace App\Http\Controllers;
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
        $persons = Person::latest()->paginate(5);
  
        return view('persons.index',compact('persons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $sectors = Sector::all();
        return view('persons.create', compact('sectors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sector_id' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'mi' => 'required',
            'born' => 'required',
            'died' => 'required'
        ]);
  
        Person::create($request->all());
   
        return redirect()->route('persons.index')
                        ->with('success','Success!.');
    }
}
