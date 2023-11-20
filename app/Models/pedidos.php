<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use Cart;

class pedidos extends Model
{
    protected $table = 'pedidos';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'created_at',
        'session_id',
        'estado'
    ];
    /* public function productos()
    {
        return $this->belongsToMany(Producto::class, 'detalles_productos')
            ->withPivot(['cantidad', 'precio', 'descripcion','nombre']);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    } */

}
