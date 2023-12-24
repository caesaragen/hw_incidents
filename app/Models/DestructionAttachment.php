<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestructionAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_damages_id',
        'type',
        'file_path',
    ];

    public function propertyDamage()
    {
        return $this->belongsTo(PropertyDamage::class, 'property_damages_id');
    }
}
