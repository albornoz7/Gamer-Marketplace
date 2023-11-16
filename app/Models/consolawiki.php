<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consolawiki extends Model
{
    use HasFactory;
    protected $table = 'consolawiki';
    protected $fillable =['nombre_consola','descripcion_consola','foto'];

}
