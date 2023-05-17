<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class DentalClinic extends Model
{
    use HasFactory;

    use HasSpatial;

    protected $fillable = [
        'name',
        'location',
    ];

    protected $casts = [
        'location' => Point::class,
    ];
}
