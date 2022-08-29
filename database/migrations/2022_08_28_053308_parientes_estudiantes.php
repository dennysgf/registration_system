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
        Schema::create('parientes_estudiantes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('parentezco',20);
            $table->bigInteger('id_estudiantes')->unsigned();
            $table->bigInteger('id_parientes')->unsigned();
            
            $table->timestamps();
//----------F O R E I G N      K E Y S -------------------------------            
            $table->foreign('id_estudiantes')->references('id')->on('estudiantes')
            ->restricOnDelete()
            ->cascadeOnUpdate();
            $table->foreign('id_parientes') ->references('id')->on('parientes')
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
