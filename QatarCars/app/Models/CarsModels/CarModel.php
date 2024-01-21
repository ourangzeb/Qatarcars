<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'brand_id',
        'url_slug',
        'name',
        'name_ur',
        'position',
        'carsure_enabled',
        'active',
        'published',
    ];

    // Additional methods or relationships can be added here as needed.

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
