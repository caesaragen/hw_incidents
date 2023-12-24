<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'conservation_area_id'
    ];

    public function conservationArea()
    {
        return $this->belongsTo(ConservationArea::class);
    }

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function outposts()
    {
        return $this->hasManyThrough(Outpost::class, Station::class);
    }

}
