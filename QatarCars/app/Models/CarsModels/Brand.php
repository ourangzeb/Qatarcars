<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'url_slug',
        'name',
        'name_ur',
        'position',
        'carsure_enabled',
        'published',
    ];

    // Additional methods or relationships can be added here as needed.
}