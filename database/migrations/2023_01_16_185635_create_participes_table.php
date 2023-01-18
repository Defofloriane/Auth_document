<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participes', function (Blueprint $table) {
            $table->string('matEtudiant');
            $table->foreign('matEtudiant')->references('matricule')->on('Etudiants')->onDelete('cascade');
            $table->string('ue');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade');
            $table->string('examen');
            $table->foreign('examen')->references('id_exam')->on('evaluations')->onDelete('cascade');
            $table->float('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participes');
    }
}
