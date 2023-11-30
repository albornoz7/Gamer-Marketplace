<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Daniel',
            'email'=> 'admin@gmail.com', 
            'password' => bcrypt('123456789'),
            'rol_id' => 3,
            'created_at' => now(),
        ]);

        User::create([
            'name' => 'juanito',
            'email'=> 'juanito@gmail.com', 
            'password' => bcrypt('123456789'),
            'rol_id' => 2,
            'created_at' => now(),
        ]);
    }
}
