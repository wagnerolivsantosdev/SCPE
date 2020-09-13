<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinaProfessor', function (Blueprint $table) {
            $table->integer('id_Disciplina');
            $table->integer('id_Professor');
            $table->foreign('id_Disciplina')->references('disciplina')->on('idDisciplina');
            $table->foreign('id_Professor')->references('professor')->on('idProfessor');
            $table->primary(['id_Disciplina', 'id_Professor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinaProfessor');
    }
}
