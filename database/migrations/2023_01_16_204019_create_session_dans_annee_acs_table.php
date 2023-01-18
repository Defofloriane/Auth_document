<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionDansAnneeAcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_dans_annee_acs', function (Blueprint $table) {
      
            $table->unsignedBigInteger('session');
            $table->foreign('session')->references('id_session')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('annee_ac');
            $table->foreign('annee_ac')->references('id_anneeAcademique')->on('annee_academiques')->onDelete('cascade');
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
        Schema::dropIfExists('session_dans_annee_acs');
    }
}
