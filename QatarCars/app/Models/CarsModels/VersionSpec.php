<?php
/**
 * Created by PhpStorm.
 * User: ourangzaibkhan
 * Date: 21/01/2024
 * Time: 3:07 PM
 */

// app\Models\VersionSpec.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VersionSpec extends Model
{
    protected $fillable = [
        'generation_id',
        'published',
        'active',
        'imported',
        'car_version_id',
        'start_year',
        'end_year',
        'capacity',
        'transmission_type',
        'fuel_type',
    ];

    // Relationship with generation
    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }
}
