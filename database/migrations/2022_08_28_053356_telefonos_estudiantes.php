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
        Schema::create('telefonos_estudiantes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('numero',10)->default(0);
            $table->string('tipo',35)->default(0);
            $table->bigInteger('id_estudiantes')->unsigned();
            
            $table->timestamps();

//----------F O R E I G N      K E Y S -------------------------------            
            $table->foreign('id_estudiantes') ->references('id')->on('estudiantes')
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
