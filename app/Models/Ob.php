<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ob extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ob_number',
        'reporting_name',
        'id_number',
        'incident_type',
        'name_of_affected',
        'narrative',
        'user_id',
        'date_of_incident',
    ];

    /**
     * Get the user that owns the ob.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the incident type that owns the ob.
     */

    public function incident()
    {
           return $this->hasMany(Incident::class);
    }
    public function incidentType()
    {
        return $this->belongsTo(IncidentType::class, 'incident_type');
    }
    
    
}
