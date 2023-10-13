<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $fillable =['nombre','descripcion','foto','cantidad', 'categoria','precio','status','due_date'];



public function user()
{
    return $this->belongsTo(User::class);
}
}
