<?php

namespace App\Http\Controllers;
use App\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin');
    }
    
    public function index()
    {
        $lots = Lot::latest()->paginate(5);
  
        return view('lots.index',compact('lots'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('lots.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        Lot::create($request->all());
   
        return redirect()->route('lots.index')
                        ->with('success','Lot created successfully.');
    }
}
