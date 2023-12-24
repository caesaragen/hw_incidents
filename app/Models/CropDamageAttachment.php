<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropDamageAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'crops_destruction_id',
        'type',
        'file_path',
    ];

    public function cropDestruction()
    {
        return $this->belongsTo(CropDestruction::class);
    }
}
