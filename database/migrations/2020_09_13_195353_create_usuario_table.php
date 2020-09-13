<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('idUsuario');
            $table->string('nomeUsuario', 100)->nullable(false);
            $table->string('emailUsuario', 250)->unique()->nullable(false);
            $table->timestamp('email_verified_at');
            $table->string('passwordUsuario', 255)->nullable(false);
            $table->string('remenber_token');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->primary('idUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
