<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecPourFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec_pour_filieres', function (Blueprint $table) {
            $table->unsignedBigInteger('specialite');
            $table->foreign('specialite')->references('id_specialite')->on('specialites')->onDelete('cascade');
            $table->unsignedBigInteger('niveau');
            $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            $table->unsignedBigInteger('filiere');
            $table->foreign('filiere')->references('id_filiere')->on('filieres')->onDelete('cascade');
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
        Schema::dropIfExists('spec_pour_filieres');
    }
}
