<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trucks;

class Mechanics extends Model
{
    use HasFactory;

    public function getTrucks()
    {
        return $this->hasMany(Trucks::class, 'mechanic_id', 'id');
    }
}
