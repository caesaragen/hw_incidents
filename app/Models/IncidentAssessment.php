<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident_id',
        'warden_dispatched',
        'narrative',
        'discussion_with_community',
        'monitoring_and_survey',
        'actions_taken',
        'evidence_file',
        'ob_number',
        'time_of_incident',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'actions_taken' => 'array',
    ];

    /**
     * Summary of incident
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }

    /**
     * Summary of chiefComments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiefComments()
    {
        return $this->hasMany(ChiefComment::class);
    }

}
