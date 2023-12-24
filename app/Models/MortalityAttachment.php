<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortalityAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'human_deaths_id',
        'type',
        'file_path',
    ];

    public function humanDeath()
    {
        return $this->belongsTo(HumanDeath::class, 'human_deaths_id');
    }
}

