<?php

namespace App\Helpers;

use App\Helpers\Contracts\AirportsContract;
use App\Models\Airport;

class AirportsMockRepositary implements AirportsContract
{
    public function LoadAll()
    {
        return [];
    }
    public function LoadById($id)
    {
        return null;
    }
}
