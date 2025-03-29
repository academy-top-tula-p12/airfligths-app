<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\City;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;

class FlightController extends Controller
{

    /**
     * Display a home page.
     */
    public function home(): View
    {
        $flights = Flight::all();

        return view("home", [
            "flights" => $flights,
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $flights = Flight::all();

        return view("flights.index", [
            "flights" => $flights,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $airlines = Airline::all();
        $airports = Airport::all();

        return view("flights.create", [
            "airlines" => $airlines,
            "airports" => $airports,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request): RedirectResponse
    {
        $title = $request->input("title");
        $date = $request->input("date");
        $time = $request->input("time");
        $duration = $request->input("duration");

        $flight = new Flight();
        $flight->title = $title;
        $flight->date = $date;
        $flight->time = $time;
        $flight->duration = $duration;

        $flight->passangers_count = $request->input("passangers_count");
        $flight->price = $request->input("price");

        $flight->activity = $request->input("activity") == "on";

        $airline = Airline::find($request->input("airline"));
        $flight->airline()->associate($airline);

        $departure = Airport::find($request->input("departure"));
        $flight->departure()->associate($departure);

        $arrival = Airport::find($request->input("arrival"));
        $flight->arrival()->associate($arrival);

        $flight->save();

        return redirect()->route("flights.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $flight = Flight::find($id);

        return view("flights.show", [
            "flight" => $flight,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flight = Flight::find($id);
        $airlines = Airline::all();
        $airports = Airport::all();

        return view("flights.edit", [
            "flight" => $flight,
            "airlines" => $airlines,
            "airports" => $airports,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->input("title");
        $date = $request->input("date");
        $time = $request->input("time");
        $duration = $request->input("duration");

        $flight =Flight::find($id);
        $flight->title = $title;
        $flight->date = $date;
        $flight->time = $time;
        $flight->duration = $duration;

        $flight->passangers_count = $request->input("passangers_count");
        $flight->price = $request->input("price");

        $flight->activity = $request->input("activity") == "on";

        $airline = Airline::find($request->input("airline"));
        $flight->airline()->associate($airline);

        $departure = Airport::find($request->input("departure"));
        $flight->departure()->associate($departure);

        $arrival = Airport::find($request->input("arrival"));
        $flight->arrival()->associate($arrival);

        $flight->save();

        return redirect()->route("flights.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight =Flight::find($id);

        $flight->delete();

        return redirect()->route("flights.index");
    }
}
