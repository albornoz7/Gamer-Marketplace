<?php

namespace Database\Seeders;

use App\Models\vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        vendedor::create([
            'celular' => '3123123123',
            'direccion'=> 'mi casa', 
            'metodo_de_pago' => 'nequi',
            'user_id' => 2,
            'created_at' => now(),
        ]);
    }
}
