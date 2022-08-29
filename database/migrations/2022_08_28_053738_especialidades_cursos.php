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
        Schema::create('especialidades_cursos', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->bigInteger('id_cursos')->unsigned();
            $table->bigInteger('id_especialidades')->unsigned();
            
            $table->timestamps();
            //----------F O R E I G N      K E Y S -------------------------------

            $table->foreign('id_cursos')
            ->references('id')->on('cursos')
            ->restricOnDelete()
            ->cascadeOnUpdate();  

            $table->foreign('id_especialidades')
            ->references('id')->on('especialidades')
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
