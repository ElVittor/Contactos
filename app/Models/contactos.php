<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
    protected $fillable = ['nombre', 'ap', 'am', 'correo', 'telefono'];
}
