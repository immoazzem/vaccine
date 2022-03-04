<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    public function center()
    {
        return $this->belongsTo(VaccinationCenter::class, 'center_id', 'id');
    }
}
