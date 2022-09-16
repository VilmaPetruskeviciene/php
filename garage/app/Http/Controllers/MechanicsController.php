<?php

namespace App\Http\Controllers;

use App\Models\Mechanics;
use App\Http\Requests\StoreMechanicsRequest;
use App\Http\Requests\UpdateMechanicsRequest;

class MechanicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMechanicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMechanicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanics $mechanics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanics $mechanics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMechanicsRequest  $request
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMechanicsRequest $request, Mechanics $mechanics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanics  $mechanics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanics $mechanics)
    {
        //
    }
}
