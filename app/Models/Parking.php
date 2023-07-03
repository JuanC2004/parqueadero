<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function parkingslots(): HasMany{
        return $this->hasMany(Parkingslot::class);
    }
}
