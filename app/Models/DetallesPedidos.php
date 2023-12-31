<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;
use App\Models\pedidos;
use Cart;

class DetallesPedidos extends Model
{
    use HasFactory;
    protected $table = 'detalles_pedidos';
    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio',
        'descripcion',
    ];
    public function pedidos()
    {
        return $this->belongsTo(pedidos::class, 'pedido_id');
    }

    public function productos()
    {
        return $this->belongsTo(productos::class, 'producto_id');
    } 

    public function user()
{
    return $this->belongsTo(User::class);
}
public function vendedor()
{
    return $this->belongsTo(vendedor::class);
}

}
