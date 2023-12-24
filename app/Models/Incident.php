<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

        protected $fillable = [
            'name_of_affected',
            'ob_id',
            'compensation_animal_id',
            'date_of_incident',
            'compensationable'
        ];

        /**
         * Summary of ob
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function ob()
        {
            return $this->belongsTo(Ob::class);
        }

        /**
         * Summary of compensationAnimal
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function compensationAnimal()
        {
            return $this->belongsTo(CompensationAnimal::class);
        }

        public function incidentType()
        {
            return $this->belongsTo(IncidentType::class, 'incident_type');
        }
}
