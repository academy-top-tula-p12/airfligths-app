<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cities = City::all();

        return view("cities.index", [
            "cities" => $cities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("cities.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $title = $request->input("title");
        $city = new City();
        $city->title = $title;

        $city->save();

        return redirect()->route("cities.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $city = City::all()->find($id);
        $airlines = $city->airlines();
        $airports= $city->airports();

        return view("cities.show", [
            "city" => $city,
            "airlines" => $airlines,
            "airports" => $airports
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $city = City::all()->find($id);

        return view("cities.edit", [
            "city" => $city
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $title = $request->input("title");

        $city = City::all()->find($id);
        $city->title = $title;

        $city->save();

        return redirect()->route("cities.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $city = City::all()->find($id);
        $city->delete();

        return redirect()->route("cities.index");
    }
}

