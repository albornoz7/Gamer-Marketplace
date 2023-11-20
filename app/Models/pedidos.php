<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;
use Cart;

class pedidos extends Model
{
    protected $table = 'pedidos';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'created_at',
        'session_id',
        'status',
        
        
    ];
    public function productos()
    {
        return $this->belongsToMany(productos::class, 'detalles_pedido')
            ->withPivot(['cantidad', 'precio', 'descripcion']);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    } 
    public function total($subtotal)
    {

    }
}
