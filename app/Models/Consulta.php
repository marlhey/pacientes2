<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultation_date',
        'discharge_date',
        'diagnosis',
        'treatment',
        'other_data',
        'observations',
        'id_user',
        'id_patient'
    ];
}
