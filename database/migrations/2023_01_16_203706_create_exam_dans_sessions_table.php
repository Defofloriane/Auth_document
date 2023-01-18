<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamDansSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_dans_sessions', function (Blueprint $table) {
            $table->string('ue');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade');
            $table->string('session');
            $table->foreign('session')->references('id_session')->on('sessions')->onDelete('cascade');
            $table->string('exam');
            $table->foreign('exam')->references('id_exam')->on('evaluations')->onDelete('cascade');
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
        Schema::dropIfExists('exam_dans_sessions');
    }
}
