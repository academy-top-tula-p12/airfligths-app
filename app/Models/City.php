<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
    ];

    public function airlines(): HasMany
    {
        return $this->hasMany(Airline::class);
    }

    public function airports(): HasMany
    {
        return $this->hasMany(Airport::class);
    }
}
