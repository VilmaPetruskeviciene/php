<?php

namespace App\Http\Controllers;

use App\Models\Trucks;
use App\Models\Mechanics;
use Illuminate\Http\Request;
use Image;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Trucks::all();
        $mechanics = Mechanics::orderBy('surname')->get();

        return view('truck.index', [
            'trucks' => $trucks,
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
        $mechanics = Mechanics::orderBy('name')->orderBy('surname', 'desc')->get();
        //$mechanics = $mechanics->sortBy('name');
        return view('truck.create', [
            'mechanics' => $mechanics
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truck = new Trucks;
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-' . rand(100000, 999999). '.' . $ext;
            $Image = Image::make($photo)->pixelate(12);
            $Image->save(public_path().'/trucks/'.$file);
            //$photo->move(public_path().'/trucks', $file);
            $truck->photo = asset('/trucks') . '/' . $file;
        }

        $truck->maker = $request->maker;
        $truck->plate = $request->plate;
        $truck->make_year = $request->make_year;
        $truck->mechanic_notices = $request->mechanic_notices;
        $truck->mechanic_id = $request->mechanic_id;
        $truck->save();

        return redirect()->route('t_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function show(Trucks $trucks)
    {
        return view('truck.show', [
            'trucks' => $trucks
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function edit(Trucks $trucks)
    {
        $mechanics = Mechanics::all();
        return view('truck.edit', [
            'mechanics' => $mechanics,
            'trucks' => $trucks
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trucks $trucks)
    {
        $trucks->maker = $request->maker;
        $trucks->plate = $request->plate;
        $trucks->make_year = $request->make_year;
        $trucks->mechanic_notices = $request->mechanic_notices;
        $trucks->mechanic_id = $request->mechanic_id;

        if ($request->delete_photo) {
            unlink(public_path().'/trucks/' .pathinfo($trucks->photo, PATHINFO_FILENAME).'.'.pathinfo($trucks->photo, PATHINFO_EXTENSION));
            $trucks->photo = null;
        }

        if ($request->file('photo')) {
            if ($trucks->photo) {
                unlink(public_path().'/trucks/' .pathinfo($trucks->photo, PATHINFO_FILENAME).'.'.pathinfo($trucks->photo, PATHINFO_EXTENSION));
            }
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-' . rand(100000, 999999). '.' . $ext;
            $photo->move(public_path().'/trucks', $file);
            $trucks->photo = asset('/trucks') . '/' . $file;
        }

        $trucks->save();

        return redirect()->route('t_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trucks  $trucks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trucks $trucks)
    {
        if ($trucks->photo) {
            unlink(public_path().'/trucks/' .pathinfo($trucks->photo, PATHINFO_FILENAME).'.'.pathinfo($trucks->photo, PATHINFO_EXTENSION));
        }
        $trucks->delete();
        return redirect()->route('t_index');
    }
}
