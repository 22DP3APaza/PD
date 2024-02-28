<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurss extends Model
{
    protected $fillable = [
        "nosaukums",
        "Paskaidrojušais_teksts",
        "Banera_adrese",
        "Cilvēku_skaits",
    ];
}



