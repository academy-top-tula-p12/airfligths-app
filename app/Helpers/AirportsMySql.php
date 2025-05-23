<?php

namespace App\Helpers;

use App\Helpers\Contracts\AirportsContract;
use App\Models\Airport;

class AirportsMySql implements AirportsContract
{
    public function LoadAll()
    {
        return Airport::all();
    }

    public function LoadAllActivity()
    {
        return Airport::where("activity", true)->get();
    }

    public function LoadById($id)
    {
        return Airport::find($id);
    }
}
