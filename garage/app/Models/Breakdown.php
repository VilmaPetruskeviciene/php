<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;

    const STATUS = [
        1 => 'Created',
        2 => 'In progress',
        3 => 'Well done'
    ];

    public function getTruck() 
    {
        return $this->belongsTo(Trucks::class, 'truck_id', 'id');
    }

}
