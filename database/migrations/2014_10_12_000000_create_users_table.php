<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();// autoincremental identificador del usuario
            $table->string('name');//nombres
            $table->string('phone')->nullable();
            $table->string('email')->unique();//emails y unicos imails irrepetibles
            $table->timestamp('email_verified_at')->nullable();//cuando el usuario modifico su email
            $table->string('password');//password encriptado nunca texto plano
            $table->rememberToken();//token de sesion de usuario para recordarte
            $table->timestamps();//almacena fecha y hora de creacion y modificacion de un usuario.
        });
    }

    /**
     * Reverse the migrations.elimina todo lo hecho por la funcion up()
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
