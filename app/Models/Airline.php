<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Airline extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "logotype"
    ];

    public function city(): BelongsTo{
        return $this->belongsTo(City::class);
    }

    public function airports(): BelongsToMany{
        return $this->belongsToMany(Airport::class);
    }

    public function flights(): BelongsToMany{
        return $this->belongsToMany(Flight::class);
    }
}
