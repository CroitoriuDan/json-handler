<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['device_id', 'location_name'];

    public function detergentPumps()
    {
        return $this->hasMany(DetergentPump::class, 'device_id', 'device_id');
    }
}
