<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Race extends Model
{
    use HasFactory;

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'races');
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
