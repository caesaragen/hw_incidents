<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of CompensationAnimal
 */
class CompensationAnimal extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name',
        'incident_type_id',
    ];

    /**
     * Summary of incidentType
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incidentType()
    {
        return $this->belongsTo(IncidentType::class);
    }
}
