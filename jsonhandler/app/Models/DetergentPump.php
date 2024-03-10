<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetergentPump extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_id',
        'name',
        'active',
        'trigger',
        'dosage',
        'xp',
        'xt',
        'total',
        'remaining',
    ];
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'device_id');
    }
}
