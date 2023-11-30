<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\roles;
use App\Models\User;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        roles::create([
            'id' => '1',
            'roll' => 'usuario',
        ]);

        roles::create([
            'id' => '2',
            'roll' => 'vendedor',
        ]);
        roles::create([
            'id' => '3',
            'roll' => 'admin',
        ]); 

        
  
        }
}
