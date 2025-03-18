<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "date",
        "time",
        "duration"
    ];

    public function airline(): BelongsTo{
        return $this->belongsTo(Airline::class);
    }

    public function departure(): BelongsTo{
        return $this->belongsTo(Airport::class);
    }

    public function arrival(): BelongsTo{
        return $this->belongsTo(Airport::class);
    }
}
