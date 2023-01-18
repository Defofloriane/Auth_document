<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstInscritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('est_inscrits', function (Blueprint $table) {
                  
            $table->string('matEtudiant');
            $table->foreign('matEtudiant')->references('matricule')->on('Etudiants')->onDelete('cascade');
            $table->string('niveau');
            $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            $table->string('filiere');
            $table->foreign('filiere')->references('id_filiere')->on('filieres')->onDelete('cascade');
            $table->string('annee');
            $table->foreign('annee')->references('id_anneeAcademique')->on('annee_academiques')->onDelete('cascade');
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
        Schema::dropIfExists('est_inscrits');
    }
}
