<?php

namespace App\Http\Controllers;

use App\Grave;
use App\Sector;
use Illuminate\Http\Request;

class GraveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sector $sector)
    {
        return view('graves.index', compact('sector'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sector $sector)
    {
        return view('graves.create', compact('sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Sector $sector)
    {
        for($i = 0; $i < $request->graves; $i++)
        {
            $sector->graves()->create();
        }

        return redirect()->route('sectors.graves.index', $sector)->with('status', 'Successfully created graves');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grave  $grave
     * @return \Illuminate\Http\Response
     */
    public function show(Grave $grave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grave  $grave
     * @return \Illuminate\Http\Response
     */
    public function edit(Grave $grave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grave  $grave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grave $grave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grave  $grave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grave $grave)
    {
        //
    }
}
