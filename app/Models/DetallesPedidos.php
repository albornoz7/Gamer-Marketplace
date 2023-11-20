<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;
use App\Models\pedidos;

class DetallesPedidos extends Model
{
    use HasFactory;
    protected $table = 'detalles_pedidos';
    protected $fillable = [
        'pedidos_id',
        'producto_id',
        'cantidad',
        'descripcion',
        'precio',
    ];
    /* public function pedidos()
    {
        return $this->belongsTo(Orden::class, 'pedido_id');
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    } */

}
