<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'title',
        'description',
        'image',
        'status',
        'latitude',
        'longitude',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function disabilities()
    {
        return $this->belongsToMany(Disability::class);
    }
}
