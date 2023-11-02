<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class vendedor extends Model
{

    protected $table = 'vendedor';
    protected $fillable =['celular','direccion','metodos_de_pago','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
