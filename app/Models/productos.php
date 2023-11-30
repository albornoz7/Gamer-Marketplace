<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable =['nombre','descripcion','foto','cantidad', 'categoria','precio','status','due_date','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pedido()
    {
        return $this->belongsToMany(DetallesPedidos::class, 'detalles_pedido')
            ->withPivot(['cantidad', 'precio', 'descripcion']);
    }


}
