<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropDestruction extends Model
{
    use HasFactory;

    protected $table = 'crops_destruction';
    protected $fillable = [
        'circumstances', 'crop_name', 'animal_responsible', 'land_ownership_status', 'acreage', 
        'stage', 'value', 'measures', 'place', 'location_status', 'date', 'time',
        'verified_by', 'est_no', 'designation', 'signature', 'claimant_id'
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
