<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'address',
        'postcode',
        'locality',
        'province',
        'birthdate',
        'sex',
        'security_number',
        'phone_number'
    ];
}
