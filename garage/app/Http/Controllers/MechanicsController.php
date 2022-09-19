<?php

namespace App\Http\Controllers;

use App\Models\Mechanics;
use Illuminate\Http\Request;

class MechanicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = Mechanics::all();
        return view('mechanic.index', [
            'mechanics' => $mechanics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mechanic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mechanics = new Mechanics;
        $mechanics->name = $request->name;
        $mechanics->surname = $request->surname;
        $mechanics->save();
        return redirect()->route('m_index')->with('success_msg', 'Good job. We have new mechanic now.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanics $mechanics)
    {
        return view('mechanic.show', [
            'mechanics' => $mechanics
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanics $mechanics)
    {
        return view('mechanic.edit', [
            'mechanics' => $mechanics
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanics $mechanics)
    {
        $mechanics->name = $request->name;
        $mechanics->surname = $request->surname;
        $mechanics->save();
        return redirect()->route('m_index')->with('success_msg', 'Good job. Mechanic was updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanics $mechanics)
    {
        if ($mechanics->getTrucks()->count()) {
            return redirect()->back()->with('info_msg', 'Oh no, you can not delete this one.');
        }
        $mechanics->delete();
        return redirect()->route('m_index');
    }
}
