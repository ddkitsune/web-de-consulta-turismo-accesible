<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TourismRoute;

class Disability extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'description'];

    public function tourismRoutes()
    {
        return $this->belongsToMany(TourismRoute::class);
    }
}
