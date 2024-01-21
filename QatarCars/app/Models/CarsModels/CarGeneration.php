<?php
/**
 * Created by PhpStorm.
 * User: ourangzaibkhan
 * Date: 21/01/2024
 * Time: 3:09 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarGeneration extends Model
{
    protected $fillable = [
        'model_id',
        'name',
        'url_slug',
        'up_coming',
        'popular',
        'imported',
        'active',
        'published',
        'launch_year',
        'close_year',
    ];

    // Additional methods or relationships can be added here as needed.

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
