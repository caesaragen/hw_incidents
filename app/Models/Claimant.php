<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claimant extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */

     protected $fillable = [
        'name',
        'incident_assessment_id',
        'id_passport_no',
        'address',
        'post_code',
        'county',
        'sub_county',
        'location',
        'sub_location',
        'constituency',
        'tel_no',
        'email',
        'sex',
        'age',
        
     ];
     
     /**
      * Summary of incident
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function incident()
     {
         return $this->belongsTo(Incident::class);
     }

     /**
      * Summary of incidentAssessment
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function incidentAssessment()
     {
         return $this->belongsTo(IncidentAssessment::class);
     }

}
