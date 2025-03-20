<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\City;
use App\Models\Airline;
use App\Models\Airport;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $airports = Airline::all();

        return view("airports.index", [
            "airports" => $airports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cities = City::all();
        $airlines = Airline::all();

        return view("airports.create", [
            "cities" => $cities,
            "airlines" => $airlines
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $title = $request->input("title");
        $image = $request->file("image")->store("images", "public");

        $airport = new Airport();

        $airport->title = $title;
        $airport->image = $image;

        $city = City::find($request->input("city"));
        $airport->city()->associate($city);

        $airport->save();

        $airlines = $request->input("airlines");
        if($airlines != null){
            foreach($airlines as $airline){
                $airport->airports()->attach($airline);
            }
        }

        return redirect()->route("airports.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $airport = Airport::find($id);
        $city = City::find($airport->city_id);
        $airlines = $airport->airlines();

        return view("airports.show", [
            "airport" => $airport,
            "city" => $city,
            "airlines" => $airlines
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $airport = Airport::find($id);
        $cities = City::all();
        $airlines = Airlines::all();

        return view("airports.edit", [
            "airport" => $airport,
            "cities" => $cities,
            "airlines" => $airlines
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $airport = Airport::find($id);

        $title = $request->input("title");
        $airport->title = $title;

        if($request->file("image")){
            $image = $request->file("image")->store("images", "public");
            $airport->image = $image;
        }

        $city = City::find($request->input("city"));
        $airport->city()->associate($city);

        $airport->save();

        $airport->airlines()->detach();

        $airlines = $request->input("airlines");
        if($airlines != null){
            foreach($airlines as $airline){
                $airport->airports()->attach($airline);
            }
        }

        return redirect()->route("airports.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $airport = Airport::find($id);
        $airport->delete();
        return redirect()->route("airports.index");
    }
}
