<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outpost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function county()
    {
        return $this->belongsToThrough(County::class, Station::class);
    }       

    public function conservationArea()
    {
        return $this->belongsToThrough(ConservationArea::class, County::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }
}
