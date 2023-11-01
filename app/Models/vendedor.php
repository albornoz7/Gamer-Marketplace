<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendedor extends Model
{
    protected $fillable =['celular','direccion','metodos_de_pago','cantidad'];

    use HasFactory;
}
