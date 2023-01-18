<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstDansFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('est_dans_filieres', function (Blueprint $table) {
            $table->string('ue');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade');
            $table->string('niveau');
            $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            $table->string('filiere');
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
        Schema::dropIfExists('est_dans_filieres');
    }
}
