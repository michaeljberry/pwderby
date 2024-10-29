<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Racer extends Model
{
    use HasFactory;

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class)->chaperone();
    }
}
