<?php

namespace App\Helpers\Contracts;

interface AirportsContract{
    public function LoadAll();
    public function LoadById($id);
}
