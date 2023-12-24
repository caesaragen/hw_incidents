<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiefComment extends Model
{
    use HasFactory;

    protected $table = 'chief_comments';

    protected $fillable = [
        'claimant_id',
        'chief_comments',
        'chief_name',
        'chief_phone',
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
