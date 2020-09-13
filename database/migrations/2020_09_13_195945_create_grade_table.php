<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->integer('idGrade');
            $table->year('anoGrade')->nullable(false);
            $table->enum('semestreGrade', ['1', '2', '3'])->nullable(false);
            $table->unsignedInteger('id_Curso')->nullable(false);
            $table->foreign('id_Curso')->references('curso')->on('idCurso');
            $table->primary('idGrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade');
    }
}
