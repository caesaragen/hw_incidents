<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanDeath extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_of_death', 'animal_responsible', 'inside_outside_pa',
        'gps_coordinates', 'date_of_incident', 'time_of_incident',
        'circumstances', 'verifying_officer', 'est_no', 'warden_details',
          'designation', 'claimant_id'
    ];


    public function claimant()
    {
        return $this->belongsTo(Claimant::class);
    }

}
