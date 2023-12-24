<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDamage extends Model
{
    use HasFactory;

    protected $fillable = [
        'claimant_id', 'circumstances', 'no_of_adult', 'estimated_value',
        'animal_responsible', 'total_estimated_value', 'place_of_incident',
        'date_of_incident', 'time_of_incident', 'verified_by_name', 'est_no',
        'details_of_incident',  'designation', 'insideOrOutsidePA'
    ];

    /**
     * Summary of claimant
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function claimant()
    {
        return $this->belongsTo(Claimant::class);
    }
}
