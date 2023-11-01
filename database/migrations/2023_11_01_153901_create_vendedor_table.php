<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Vendedor;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('vendedor', function (Blueprint $table) {
            $table->id();
            $table->string('celular');
            $table->string('direccion');
            $table->string('metodo_de_pago');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        // Obtener los datos de nombre y email de la tabla "users"
        $users = User::select('name', 'email')->get();

        // Insertar los datos en la tabla "vendedor"
        foreach ($users as $user) {
            Vendedor::create([
                'celular' => 'valor_celular',
                'direccion' => 'valor_direccion',
                'metodo_de_pago' => 'valor_metodo_de_pago',
                'user_id' => $user->id,
            ]);
        }
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendedor');
        Schema::dropIfExists('users');
    }
};