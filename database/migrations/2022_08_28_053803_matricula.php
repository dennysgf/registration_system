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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('type_assigment',30)->default(0);
            $table->string('type_enrollment',40)->default(0);
            $table->date('date_registration');
            $table->bigInteger('id_estudiantes')->unsigned();
            $table->bigInteger('id_cursos')->unsigned();
            
            $table->timestamps();
            
//----------F O R E I G N      K E Y S -------------------------------
            $table->foreign('id_estudiantes')
            ->references('id')->on('estudiantes')
            ->restricOnDelete()
            ->cascadeOnUpdate();
            $table->foreign('id_cursos')
            ->references('id')->on('cursos')
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
