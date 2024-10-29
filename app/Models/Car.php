<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;

    public function racers(): BelongsTo
    {
        return $this->belongsTo(Racer::class);
    }

    public function heats(): BelongsToMany
    {
        return $this->belongsToMany(Heat::class, 'races');
    }

    public function lanes(): BelongsToMany
    {
        return $this->belongsToMany(Lane::class, 'races');
    }
}
