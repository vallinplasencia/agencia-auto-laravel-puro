<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';

    protected $fillable = ['chapa', 'marca', 'moderno', 'plazas', 'transmision', 'estado', 'imagen', 'tipo_id'];
}
