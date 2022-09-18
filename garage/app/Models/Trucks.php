<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mechanics;

class Trucks extends Model
{
    use HasFactory;

    public function getMechanic()
    {
        return $this->belongsTo(Mechanics::class, 'mechanic_id', 'id');
    }
}
