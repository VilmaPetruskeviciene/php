<?php

namespace App\Http\Controllers;

use App\Models\Trucks;
use App\Http\Requests\StoreTrucksRequest;
use App\Http\Requests\UpdateTrucksRequest;

class TrucksController extends Controller
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
     * @param  \App\Http\Requests\StoreTrucksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrucksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function show(Trucks $trucks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function edit(Trucks $trucks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrucksRequest  $request
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrucksRequest $request, Trucks $trucks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trucks $trucks)
    {
        //
    }
}
