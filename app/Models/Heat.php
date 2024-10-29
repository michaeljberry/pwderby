<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Heat extends Model
{
    use HasFactory;

    public function rounds(): BelongsTo
    {
        return $this->belongsTo(Round::class);
    }

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'races');
    }

    public function lanes(): BelongsToMany
    {
        return $this->belongsToMany(Lane::class, 'races');
    }
}
