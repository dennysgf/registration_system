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
        //
        Schema::create('parientes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('type_dni',12)->default(0);
            $table->string('cedula',10)->unique();
            $table->string('apellido',50);
            $table->string('nombre',50);
            $table->string('nacionalidad',50);
            $table->string('correo')->default(0);
            $table->string('instruccion',50)->default(0);
            $table->string('ocupacion',50)->default(0);
            
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
        //
    }
};
