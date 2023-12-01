<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\consolawiki;

class EnciclopediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        consolawiki::create([
            'nombre_consola' => 'playstation',
            'descripcion_consola'=> 'aqui va play',
            'created_at' => now(),
        ]);
        consolawiki::create([
            'nombre_consola' => 'xbox',
            'descripcion_consola'=> 'aqui va xbox',
            'created_at' => now(),
        ]);
        consolawiki::create([
            'nombre_consola' => 'nintendo',
            'descripcion_consola'=> 'aqui va nintendo',
            'created_at' => now(),
        ]);
        consolawiki::create([
            'nombre_consola' => 'sega',
            'descripcion_consola'=> 'aqui va sega',
            'created_at' => now(),
        ]);
        consolawiki::create([
            'nombre_consola' => 'atari',
            'descripcion_consola'=> 'aqui va atari',
            'created_at' => now(),
        ]);
        consolawiki::create([
            'nombre_consola' => 'arcade',
            'descripcion_consola'=> 'aqui va arcade',
            'created_at' => now(),
        ]);
    }
}
