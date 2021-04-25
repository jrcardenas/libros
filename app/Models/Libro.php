<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable =[

        "ISBN",
        "titulo",
        "autor",
        "editorial",
        "edicion",
        "anyo",
        "user_id"


    ];
}
