<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    public function racers(): BelongsToMany
    {
        return $this->belongsToMany(Racer::class);
    }

    public function awards(): HasMany
    {
        return $this->hasMany(Award::class);
    }
}
