<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('seccion',30);
            $table->bigInteger('id_periodos_academicos')->unsigned();
            $table->bigInteger('id_paralelos')->unsigned();
            $table->bigInteger('id_profesores')->unsigned();
            $table->bigInteger('id_niveles')->unsigned();
            
            $table->timestamps();
            //----------F O R E I G N      K E Y S -------------------------------
            $table->foreign('id_periodos_academicos')
            ->references('id')->on('periodos_academicos')
            ->restricOnDelete()
            ->cascadeOnUpdate(); 

            $table->foreign('id_paralelos')
            ->references('id')->on('paralelos')
            ->restricOnDelete()
            ->cascadeOnUpdate();  

            $table->foreign('id_profesores')
            ->references('id')->on('profesores')
            ->restricOnDelete()
            ->cascadeOnUpdate();

            $table->foreign('id_niveles')
            ->references('id')->on('niveles')
            ->restricOnDelete()
            ->cascadeOnUpdate(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
