<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parkingslot extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    protected $casts = [
        'status' => 'integer'
    ];

    public function parking():BelongTo{
        return $this->belongsTo(Parking::class, 'parking_id');
    }

    public function vehicles():HasOne{
        return $this->hasOne(Vehicle::class);
    }
}
