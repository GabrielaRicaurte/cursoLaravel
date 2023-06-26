<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";

    // Si no se respeta la convercion de nombre se tiene que espeficial la tabla con el $table

    protected $fillable = ["title", "description", "deadline", "done" ];

    // El fillable funciona para indiar que campos de la tabla podran ser cuplimentable

    protected $guarded = [];

    // El guarded funciona para protejer los campos

    protected $casts = [
        "deadline" => "date"
    ];

    // Cast funciona para castear datos

    protected $hidden = [];

    // hidden funciona para evitar mostrar datos que no se quiere, como por ejemplo las contraseñas

}
