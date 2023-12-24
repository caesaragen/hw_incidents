<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    use HasFactory;

    protected $table = 'next_of_kins';
    protected $fillable = [
        'name',
        'claimant_id',
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
        'age',
        'relationship'
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
