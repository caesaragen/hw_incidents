<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function counties()
    {
        return $this->hasMany(County::class);
    }

    public function stations()
    {
        return $this->hasManyThrough(Station::class, County::class);
    }

    public function outposts()
    {
        return $this->hasManyThrough(Outpost::class, Station::class);
    }
}
