<?php
/**
 * Created by PhpStorm.
 * User: ourangzaibkhan
 * Date: 21/01/2024
 * Time: 3:06 PM
 */

// app\Models\Version.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable = [
        'model_id',
        'name',
        'name_ur',
        'url_slug',
        'imported',
        'published',
        'popular',
        'active',
        'position',
        'capacity',
        'transmission_type',
        'fuel_type',
    ];

    // Relationship with model
    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
