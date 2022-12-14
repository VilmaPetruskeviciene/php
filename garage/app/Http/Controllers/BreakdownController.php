<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\Mechanics;
use App\Models\Trucks;
use Illuminate\Http\Request;

class BreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = Mechanics::orderBy('surname')->get();
        return view('breakdown.index', [
            'mechanics' => $mechanics,
            'status' => Breakdown::STATUS
        ]);
    }

    public function trucksList(int $mechanicId)
    {
        $trucks = Trucks::where('mechanic_id', $mechanicId)->orderBy('plate')->get();
        $html = view('breakdown.trucks-list')->with('trucks', $trucks)->render();
        return response()->json([
            'html' => $html
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $breakdowns = Breakdown::orderBy('updated_at', 'desc')->get();
        $html = view('breakdown.list')
        ->with('breakdowns', $breakdowns)
        ->with('status', Breakdown::STATUS)
        ->render();
        return response()->json([
            'html' => $html
        ]);
    }


    public function store(Request $request)
    {
        $breakdown = new Breakdown;
        $breakdown->truck_id = (int) $request->truck_id;
        $breakdown->title = $request->title;
        $breakdown->notes = $request->notes;
        $breakdown->status = (int) $request->status;
        $breakdown->price = (float) $request->price;
        $breakdown->discount = (float) $request->discount;
        $breakdown->save();

        return response()->json([
            'msg' => 'All good',
            'status' => 'OK'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function modal(Breakdown $breakdown)
    {
        $html = view('breakdown.modal_content')
        ->with('breakdown', $breakdown)
        ->with('status', Breakdown::STATUS)
        ->render();
        return response()->json([
            'html' => $html,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function edit(Breakdown $breakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBreakdownRequest  $request
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breakdown $breakdown)
    {
        $breakdown->truck_id = (int) $request->truck_id;
        $breakdown->title = $request->title;
        $breakdown->notes = $request->notes;
        $breakdown->status = (int) $request->status;
        $breakdown->price = (float) $request->price;
        $breakdown->discount = (float) $request->discount;
        $breakdown->save();

        return response()->json([
            'msg' => 'All good',
            'status' => 'OK'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breakdown $breakdown)
    {
        $breakdown->delete();
        return response()->json([
            'msg' => 'All good',
            'status' => 'OK',
            'refresh' => 'list'
        ]);
    }
}
