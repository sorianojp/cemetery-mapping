<?php

namespace App\Http\Controllers;
use App\Sector;
use App\Lot;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin');
    }
    
    public function index()
    {
        $sectors = Sector::latest()->paginate(5);
  
        return view('sectors.index',compact('sectors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $lots = Lot::all();
        return view('sectors.create', compact('lots'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'lot_id' => 'required',
            'name' => 'required',
        ]);
  
        Sector::create($request->all());
   
        return redirect()->route('sectors.index')
                        ->with('success','Sector created successfully.');
    }
}
