<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "image"
    ];

    public function city(): BelongsTo{
        return $this->belongsTo(City::class);
    }

    public function airlines(): BelongsToMany{
        return $this->belongsToManu(Airline::class);
    }

    public function flights(): BelongsToMany{
        return $this->belongsToManu(Flight::class);
    }
}
