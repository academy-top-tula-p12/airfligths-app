<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\City;
use App\Models\Airline;
use App\Models\Airport;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $airlines = Airline::all();

        return view("airlines.index", [
            "airlines" => $airlines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cities = City::all();
        //$airports = Airport::all();

        return view("airlines.create", [
            "cities" => $cities
            //"airports" => $airports
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $title = $request->input("title");
        $logotype = $request->file("logotype")->store("logotypes", "public");

        $airline = new Airline();

        $airline->title = $title;
        $airline->logotype = $logotype;

        $city = City::find($request->input("city"));
        $airline->city()->associate($city);

        $airline->save();

        // $airports = $request->input("airports");
        // if($airports != null){
        //     foreach($airports as $airport){
        //         $airline->airports()->attach($airport);
        //     }
        // }

        return redirect()->route("airlines.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $airline = Airline::find($id);
        $cities = City::all();
        //$airports = Airport::all();

        return view("airlines.edit", [
            "airline" => $airline,
            "cities" => $cities
            //"airports" => $airports
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $airline = Airline::find($id);

        $title = $request->input("title");
        $airline->title = $title;

        if($request->file("logotype")){
            $logotype = $request->file("logotype")->store("logotypes", "public");
            $airline->logotype = $logotype;
        }

        $city = City::find($request->input("city"));
        $airline->city()->associate($city);

        $airline->save();

        // $airline->airports()->detach();

        // $airports = $request->input("airports");
        // if($airports != null){
        //     foreach($airports as $airport){
        //         $airline->airports()->attach($airport);
        //     }
        // }

        return redirect()->route("airlines.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $airline = Airline::find($id);
        $airline->delete();
        return redirect()->route("airlines.index");
    }
}
