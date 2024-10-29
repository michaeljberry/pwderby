<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Race extends Model
{
    use HasFactory;

    public function car(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'races');
    }

    public function heat(): BelongsToMany
    {
        return $this->belongsToMany(Heat::class, 'races');
    }

    public function lane(): BelongsToMany
    {
        return $this->belongsToMany(Lane::class, 'races');
    }
}
