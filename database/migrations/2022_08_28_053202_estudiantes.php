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
            Schema::create('estudiantes', function (Blueprint $table) {
                $table->engine="innoDB";
                $table->bigIncrements('id');
                $table->string('type_dni',12)->default(0);
                $table->string('cedula',10)->unique();
                $table->string('apellido',50);
                $table->string('nombre',50);
                $table->date('fecha_nacimiento');
                $table->integer('edad');
                $table->string('lugar_nacimiento',50);
                $table->string('nacionalidad',50);
                $table->string('discapacidad',2)->default(0);
                $table->string('n_carnet',20)->default(0);
                $table->string('tipo_discapacidad',60)->default(0);
                $table->integer('porcentaje')->default(0);
                $table->string('correo')->default(0);
                $table->string('definicion_etnica',50)->default(0);
                $table->string('tipo_sangre',10);
                $table->string('sexo',20);
                $table->bigInteger('id_representantes')->unsigned();
                $table->timestamps();

//----------F O R E I G N      K E Y S -------------------------------            
                $table->foreign('id_representantes')->references('id')->on('representantes')
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
