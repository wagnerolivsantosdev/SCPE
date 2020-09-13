<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaCursoGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinaCursoGrade', function (Blueprint $table) {
            $table->integer('id_Disciplina');
            $table->integer('id_Curso');
            $table->integer('id_Grade');
            $table->longText('ementa');
            $table->foreign('id_Disciplina')->references('disciplina')->on('idDisciplina');
            $table->foreign('id_Curso')->references('curso')->on('idCurso');
            $table->foreign('id_Grade')->references('grade')->on('idGrade');
            $table->primary(['id_Disciplina', 'id_Curso', 'id_Grade']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinaCursoGrade');
    }
}
